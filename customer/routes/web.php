<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', function () {
    return ('welcome to Customer site');
});
