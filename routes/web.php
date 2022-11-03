<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
