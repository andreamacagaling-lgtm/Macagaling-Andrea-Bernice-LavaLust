<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {


    public function show_users()
    {
        $this-> call->view('users');
        $users = $this->UserModel->all();
        ddt($users, 'Users Tables');
    }
}