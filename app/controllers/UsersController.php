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

    public function create_users()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');
            $confirm_password = $this->io->post('confirm_password');

            // Validation para sa password matching
            if ($password !== $confirm_password) {
                echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
                return;
            }

            $this->call->model('UserModel');

            if ($this->UserModel->insert_user($username, $password)) {
                echo "<script>alert('User successfully added!'); window.location.href='/create_users';</script>";
            } else {
                echo "<script>alert('Failed to insert user.'); window.history.back();</script>";
            }
            return;
        }
        $this->call->view('create_users');
    }
}