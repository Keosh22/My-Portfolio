<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.layout');
});

Route::get('sample/', function(){
    return view('sample');
});