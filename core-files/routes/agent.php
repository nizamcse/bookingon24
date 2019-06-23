<?php

Route::group(['middleware'  => 'auth:agent'],function(){

    Route::get('/',function(){
        return view('agent.home');
    });

    /**
     * Admin Logout
     */

    Route::get('logout',[
        'uses'  => 'Auth\LoginController@logout',
        'as'    => 'agent.logout'
    ]);
});


Route::group(['middleware'  => 'guest:agent'],function(){
    /**
     * User Registration
     */

    Route::get('/register/{id?}',[
        'uses'  => 'Auth\RegisterController@showRegistrationForm',
        'as'    => 'agent.register'
    ]);

    Route::post('/register/{id?}',[
        'uses'  => 'Auth\RegisterController@register',
        'as'    => 'post.agent.register'
    ]);

    /**
     * User Login
     */
    Route::get('/login',[
        'uses'  => 'Auth\LoginController@showLoginForm',
        'as'    => 'agent.login'
    ]);
    /**
     * User Logout
     */
    Route::post('/login',[
        'uses'  => 'Auth\LoginController@login',
        'as'    => 'post.agent.login'
    ]);
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});