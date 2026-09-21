<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @since Version 1
 * @link https://github.com/ronmarasigan/LavaLust
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
/** @var object $router **/

$router->get('/', 'Welcome::index');

$router->get('/login', 'UsersController::login');
$router->post('/login', 'UsersController::login');

$router->match('/create_users', 'UsersController::create_users', ['GET', 'POST']);

$router->get('/not_logged_in', function() {
    echo "Please log in first!";
});

$router->get('/logout', 'UsersController::logout');

// Protected Routes (kailangan naka-login)
$router->get('/delete_users/{id}', 'UsersController::delete')->middleware('auth');
$router->get('/update_users/{id}', 'UsersController::update')->middleware('auth');
$router->get('/restore_users/{id}', 'UsersController::restore')->middleware('auth');

$router->get('/ProductViews', 'ProductController::ProductViews')->middleware('auth');
$router->get('/products', 'ProductController::index')->middleware('auth');
$router->any('/products/create', 'ProductController::create')->middleware('auth');
$router->any('/products/edit/{id}', 'ProductController::edit')->middleware('auth');
$router->get('/products/delete/{id}', 'ProductController::delete')->middleware('auth');
