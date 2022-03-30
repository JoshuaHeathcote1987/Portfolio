<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return view('laravel');
})->name('laravel');

Route::get('/livewire', function () {
    return view('livewire');
})->name('livewire');

Route::get('/javascript', function () {
    return view('javascript');
})->name('javascript');

Route::get('/jquery', function () {
    return view('jquery');
})->name('jquery');

Route::get('/alpinejs', function () {
    return view('alpinejs');
})->name('alpinejs');

Route::get('/cssheets', function () {
    return view('cssheets');
})->name('cssheets');

// Laravel Group

// Livewire Group

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
