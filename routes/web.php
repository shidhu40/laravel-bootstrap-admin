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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Authentication
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'Admin\LoginController@showLoginForm'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'Admin\LoginController@login'));
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'Admin\LoginController@logout'));

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    
	// Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');
	
	Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
});