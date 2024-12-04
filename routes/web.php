<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationContactConttroller;

// ------------------ Home Page-------------------
Route::get('/', function () {
    return view('homePage');
});
Route::get('/homepage', function () {
    return view('homePage');
});


// --------------- Contact-us-form----------
Route::get('/contact-us-form', function () {
    return view('contact-us-form');
});
Route::post('/saveinfoContact', [InformationContactConttroller::class, 'saveinfoContact']);

