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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function ()
{
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('users', 'AdminController@manageUsers')->name('admin.manage.users');
	Route::get('user/edit/{user_id}', 'AdminController@editUsers')->name('admin.users.edit');
	Route::post('user/update', 'AdminController@updateUsers')->name('admin.users.update');
	Route::get('user/delete/{user_id}', 'AdminController@deleteUsers')->name('admin.users.delete');
	Route::get('password', 'AdminController@changePassword')->name('admin.change.password');
	Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});