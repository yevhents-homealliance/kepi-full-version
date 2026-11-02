<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/chats', function () {
    return view('chats');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/favorites', function () {
    return view('favorites');
});
Route::get('/profile', function () {
    return view('/profile/profile');
});

Route::get('/login', function () {
    return view('/profile/login');
});
Route::get('/registration', function () {
    return view('/profile/registration');
});

