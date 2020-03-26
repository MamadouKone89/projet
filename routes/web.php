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


Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/password/reset', 'ResetPasswordController@index');

// Authentication Routes...

 //Route::resource('login', 'Auth\LoginController@login')->name('auth.login');
 //Route::resource('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::resource('/roles' , 'RoleController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::resource('/users' , 'UserController');
    //Route::resource('users', 'UsersController');
    Route::resource('roles', 'RoleController');

});

Route::resource('documents', 'DocumentController');

Route::resource('bidons', 'BidonController');