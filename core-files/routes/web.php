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

Route::get('/', [
    'uses'  => 'WelcomeController@index',
    'as'    => 'home'
]);




//Auth::routes();

Route::group(['middleware'  => 'auth'],function(){
    /**
     * Admin Logout
     */

    Route::get('/dashboard',function(){
        return view('welcome');
    });

    Route::get('/logout',[
        'uses'  => 'Auth\LoginController@logout',
        'as'    => 'user.logout'
    ]);

    Route::get('/profile',[
        'uses'  => 'UserController@profile',
        'as'    => 'profile'
    ]);
});


Route::group(['middleware'  => 'guest'],function(){
    /**
     * User Registration
     */

    Route::get('/register/{id?}',[
        'uses'  => 'Auth\RegisterController@showRegistrationForm',
        'as'    => 'user.register'
    ]);

    Route::post('/register/{id?}',[
        'uses'  => 'Auth\RegisterController@register',
        'as'    => 'post.user.register'
    ]);

    /**
     * User Login
     */
    Route::get('/login',[
        'uses'  => 'Auth\LoginController@showLoginForm',
        'as'    => 'user.login'
    ]);
    /**
     * User Logout
     */
    Route::post('/login',[
        'uses'  => 'Auth\LoginController@login',
        'as'    => 'post.user.login'
    ]);
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});