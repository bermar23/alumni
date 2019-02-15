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
    return view('layout.welcome');
});

Route::get('url', 'HomeController@index')->name('url');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
  Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
  Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
  Route::get('register', 'Admin\AdminController@create')->name('admin.register');
  Route::post('register', 'Admin\AdminController@store')->name('admin.register.store');
  Route::get('login', 'Admin\Auth\LoginController@login')->name('admin.auth.login');
  Route::post('login', 'Admin\Auth\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
  Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.auth.logout');
  Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.auth.logout');
});
