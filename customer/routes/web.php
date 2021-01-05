<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view ('Home.customerCreate');
});
Route::get('/login',  'loginController@index');
Route::post('/login', 'loginController@verify');

Route::group(['middleware'=>['sess']], function() {

Route::get('/Home',            'HomeController@index')->name('Home.index');

Route::get('/profile',          'HomeController@profile')->name('Home.profile');

Route::get('/customerCreate',       'HomeController@customerCreate')->name('Home.customerCreate');
Route::post('/customerCreate',      'HomeController@customerStore');

Route::get('/customerlist',         'HomeController@customerlist')->name('Home.customerlist');

Route::get('/customerDetails/{id}', 'HomeController@customerDetails')->name('Home.customerDetails');

Route::get('/customerEdit/{id}',    'HomeController@customerEdit')->name('Home.customerEdit');
Route::post('/customerEdit/{id}',   'HomeController@customerUpdate');


Route::get('/customerDelete/{id}',  'HomeController@customerDestroyView')->name('Home.customerDestroyView');
Route::post('/customerDelete/{id}', 'HomeController@customerDestroy');

});

Route::get('/logout',  'logoutController@index');
