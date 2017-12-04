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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middlewareGroups'=>['web']], function () {

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome2');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/custom-register', 'CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('/custom-register', 'CustomAuthController@register');

Route::get('/custom-login', 'CustomLoginController@showLoginForm')->name('custom.login');
Route::post('/custom-login', 'CustomLoginController@login');

Route::post('/custom-logout', 'CustomLoginController@logout')->name('custom.logout');
});

