<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('index');

// CRUD (laravel resource) routes
Route::resource('projects', 'ProjectDetailController');



// Auth::routes();
// Helper function that adds following the routes... https://github.com/laravel/framework/blob/5.5/src/Illuminate/Routing/Router.php
// but i only want a hidden login available so i do the auth routes manually.
// disabeling certain routes gets available with laravel 5.7 and higher

//$login_uri = '4ebd0208-8328-5d69-8c44-ec50939c0967';
$login_uri = 'login';

// Authentication Routes...
$this->get($login_uri, 'Auth\LoginController@showLoginForm')->name('login');
$this->post($login_uri, 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset')

