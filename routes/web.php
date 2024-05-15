<?php

use Illuminate\Support\Facades\Route;

use Simple\Greeter\Greeter;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/greet/{name}', function($sName) {
    $oGreetr = new Greeter();
    return $oGreetr->greet($sName);
});
