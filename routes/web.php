<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/Contact-Us', function () {
    return view('contactus');
})->name('contactus');
Route::get('/About-Us', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/localisation', function () {
    return view('localisation');
})->name('localisation');
Route::get('/riyad', function () {
    return view('riyad');
})->name('riyad');
Route::get('/medinova', function () {
    return view('medinova');
})->name('medinova');