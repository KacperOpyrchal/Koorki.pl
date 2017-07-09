<?php

use App\User;

Route::get('/', 'PagesController@getIndex');

Route::get('/contact', 'PagesController@getContact');

Route::get('/about', 'PagesController@getAbout');

Route::get('/ranking', 'PagesController@getRanking');

Route::get('users', function (){
    return User::all();
    /*return User::create([
        "name" => "Karol",
        "email" => "jakis@email.com",
        "password" => bcrypt("jakieshaslo")
    ]);*/
});