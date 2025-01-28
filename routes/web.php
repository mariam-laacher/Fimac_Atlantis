<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('sub_categories', SubCategoryController::class); // Notice the singular and plural consistency
});
