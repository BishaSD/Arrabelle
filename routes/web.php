<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\RoomController;
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
//Welcome page Route
Route::get('/', function () {
    return view('welcome');
});

//Routes for different views on the navbar.
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');

//Route for check room availability form.
Route::POST("apartment",[RoomController::class,'getData']);
//View route for availability check search result.
Route::get('/apartment', [App\Http\Controllers\ApartmentController::class, 'index'])->name('apartment');

//Admin Dashboard Route
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
