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

Route::get('/', function () {
    return view('welcome');
});

/**
 * need to add user, role, dashboard, login, logout controller
 */
Route::resource('users', 'UserController');

Route::get('/login', 'LoginController@login');
Route::post('/login/authenticate', 'LoginController@authenticate');
Route::get('/dashboard', 'DashboardController@index');
