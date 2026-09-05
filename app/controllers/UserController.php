<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function show_users()
    {
        $users = $this->UserModel->all();
        ddt($users, 'Users Tables');
        $this-> call->view('users');
    }
}