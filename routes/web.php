<?php

use App\User;

Route::get('/', 'OrderController@index');

Route::get('/contact', 'PagesController@getContact');

Route::get('/about', 'PagesController@getAbout');

Route::get('/ranking', 'PagesController@getRanking');

Route::get('/login', 'PagesController@getLogin');

Route::get('/register', 'PagesController@getRegister');

Route::get('/HowItWorks','PagesController@getHowItWorks');

Route::resource('orders', 'OrderController');

Route::get('users', function (){
    return User::all();
    /*return User::create([
        "name" => "Karol",
        "email" => "jakis@email.com",
        "password" => bcrypt("jakieshaslo")
    ]);*/
});