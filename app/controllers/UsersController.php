<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }
public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            $user = $this->UserModel->get_user_by_username($username);

            if ($user && password_verify($password, $user['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['logged_in'] = true;
                $_SESSION['username']  = $user['username'];

                echo "<script>alert('Login successful!'); window.location.href='/ProductViews';</script>";
                exit();
            } else {
                echo "<script>alert('Invalid username or password!'); window.history.back();</script>";
                exit();
            }
        }

        $this->call->view('login');
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['logged_in'] = false;
        session_destroy();
        echo "<script>alert('You are now logged out!'); window.location.href='/login';</script>";
        exit();
    }

    public function create_users() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username         = $this->io->post('username');
            $password         = $this->io->post('password');
            $confirm_password = $this->io->post('confirm_password');

            if ($password !== $confirm_password) {
                echo "<script>alert('Password and Confirm Password do not match!'); window.history.back();</script>";
                exit();
            }

            // Secure Hashing
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'username' => $username,
                'password' => $hashed_password
            ];

            if ($this->UserModel->insert_user($data)) {
                echo "<script>alert('User successfully added!'); window.location.href='/login';</script>";
                exit();
            }
        }

        $this->call->view('create_users');
    }

    public function delete($id) {
        if ($this->UserModel->delete_user($id)) {
            redirect('/ProductViews');
        }
    }

    public function update($id) {
    }

    public function restore($id) {
    }
}