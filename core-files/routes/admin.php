<?php

Route::group(['middleware'  => 'auth:admin'],function(){

    Route::get('/',[
        'uses'  => 'DashboardController@index',
        'as'    => 'admin.dashboard'
    ]);

    Route::get('transport-agencies',[
        'uses'  => 'TransportAgencyController@index',
        'as'    => 'admin.get.transport-agencies'
    ]);

    Route::get('transport-agency/{slug}',[
        'uses'  => 'TransportAgencyController@show',
        'as'    => 'transport-agency'
    ]);

    Route::get('/create-ta',[
        'uses'  => 'RegisterTransportAgencyController@create',
        'as'    => 'admin.create-ta'
    ]);

    Route::post('/create-ta',[
        'uses'  => 'RegisterTransportAgencyController@store',
        'as'    => 'post.admin.create-ta'
    ]);

    /**
     * Users
     */

    Route::get('/users',[
        'uses'  => 'UserController@index',
        'as'    => 'admin.get.users'
    ]);


    /**
     * Agents
     */

    Route::get('/agents',[
        'uses'  => 'AgentController@index',
        'as'    => 'admin.get.agents'
    ]);


    /**
     * Admin Logout
     */

    Route::get('logout',[
        'uses'  => 'Auth\LoginController@logout',
        'as'    => 'admin.logout'
    ]);
});


Route::group(['middleware'  => 'guest:admin'],function(){
    Route::get('/login',[
        'uses'  => 'Auth\LoginController@showLoginForm',
        'as'    => 'admin.login'
    ]);

    Route::post('/login',[
        'uses'  => 'Auth\LoginController@login',
        'as'    => 'post.admin.login'
    ]);
});