<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>view('pages/home'))->name('home');

Route::name('about')->get('/about-us', function(){

    return view('pages/about');
});

//Route::view('/','pages/home'))->name('homme')//
