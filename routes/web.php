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

Route::post('/storeFile','FilesController@store');

Route::get('users', function (){
    return User::all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
