<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 */
class UsersController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('UserModel');
        $this->call->library(['form_validation', 'session']);
    }

    public function create_users()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = trim($this->request->post('username'));
            $password = trim($this->request->post('password'));
            $passconfirm = trim($this->request->post('confirm_password'));

            if (!$this->form_validation->validate([
                'username' => 'required|min_length[5]|max_length[20]|alpha_numeric',
                'password' => 'required|min_length[8]|max_length[20]',
                'confirm_password' => 'required'
            ])) {
                $this->call->view('create_users', [
                    'error' => 'Validation failed. Check username and password rules.'
                ]);
                return;
            }

            if ($password !== $passconfirm) {
                $this->call->view('create_users', [
                    'error' => 'Passwords do not match.'
                ]);
                return;
            }

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Subukang i-insert sa database
            $insert_result = $this->UserModel->insert_user([
                'username' => $username,
                'password' => $hashed_password
            ]);

            if ($insert_result) {
                $this->session->set_flashdata('success', 'Account created successfully! Please login.');
                redirect('/login');
                return;
            } else {
                $this->call->view('create_users', [
                    'error' => 'Failed to register user. Please try again.'
                ]);
                return;
            }

        } else {
            $this->call->view('create_users');
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = trim($this->request->post('username'));
            $password = trim($this->request->post('password'));

            if (empty($username) || empty($password)) {
                $this->call->view('login', [
                    'error' => 'Please enter your username and password.'
                ]);
                return;
            }

            $user = $this->UserModel->get_user_by_username($username);

            if (is_array($user) && isset($user[0])) {
                $user = $user[0];
            }

            if (is_object($user)) {
                $user = (array) $user;
            }

            if (!empty($user) && isset($user['password']) && password_verify($password, $user['password'])) {

                $this->session->set_userdata('id', $user['id']);
                $this->session->set_userdata('username', $user['username']);
                $this->session->set_userdata('logged_in', true);

                // Ipasa ang success message sa login view
                $this->call->view('login', [
                    'success' => 'Login successful!'
                ]);

                // Mag-redirect sa /ProductViews pagkatapos ng 1.5 segundo
                echo "<script>
                    setTimeout(function() {
                        window.location.href = '" . site_url('ProductViews') . "';
                    }, 1500);
                </script>";
                return;

            } else {
                $this->call->view('login', [
                    'error' => 'Invalid username or password.'
                ]);
                return;
            }

        } else {
            $this->call->view('login');
        }
    } // <-- Dito idinagdag ang nawawalang brace para sa login() method

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/login');
    }
}