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
Route::get('/verify_captcha', 'LicenseeAuth\RegisterController@verifycaptcha')->name('verify_captcha');
 
 
Route::group(['prefix' => 'official'], function () {
  Route::get('/login', 'OfficialAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'OfficialAuth\LoginController@login');
  Route::post('/logout', 'OfficialAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'OfficialAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'OfficialAuth\RegisterController@register');

  Route::post('/password/email', 'OfficialAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'OfficialAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'OfficialAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'OfficialAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login'); 
  Route::post('/login', 'AdminAuth\LoginController@postLogin');  
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
 

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
