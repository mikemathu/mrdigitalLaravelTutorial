<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@showUsers');
Route::get('/admin/users/create', 'UserController@createUser');
Route::post('/admin/users/create', 'UserController@saveUser')->name('createuser');

Route::get('/admin/users', 'UserController@showUser')->name('showusers');
Route::get('/admin/users/view/{id}', 'UserController@viewUser')->name('viewuser');
Route::get('/admin/users/update/{id}', 'UserController@updateUser')->name('updateuser');
Route::get('/admin/users/delete/{id}', 'UserController@deleteUser')->name('deleteuser');

// Route::get('/login', 'AuthController@login')->name('login')->middleware('guest');
// Route::post('/login', 'AuthController@signin')->name('signin');
// Route::post('/logout', 'AuthController@logout')->name('logout');
