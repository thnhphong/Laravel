<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;


use App\Http\Controllers\AdminController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
Route::get('/', 'HomeController@index')->name('home');

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/{bookTitle}/{id}', [BookController::class, 'details'])->name('books.details');

Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/wishlist', 'HomeController@wishlist')->name('wishlist');
Route::get('/favorites', 'HomeController@favorites')->name('favorites');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

/* log in & sign up*/
Route::get('login',  'LoginController@index')->name('login');
Route::post('login', 'LoginController@post')->name('login.post');

Route::get('signup', 'SignupController@index')->name('signup');
Route::post('signup', 'SignupController@store')->name('signup.store');


/* admin */
Route::get('admin', [AdminController::class, 'index'])->name('admin');