<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');