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
                echo "<script>alert('User successfully added!'); window.location.href='/ProductViews';</script>";
                exit();
            }
        }

        // I-load ang view kapag GET request
        $this->call->view('create_users');
        $users = $this->UserModel->all();
        ddt($users, 'Users Tables');
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