<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return 'About page';
    return view('about');
});

Route::get('/post', function () {
    // return 'Post Page';
    return view('post');
});

Route::get('/profile',function(){
    // return 'Profile Page';
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('link','/link');

