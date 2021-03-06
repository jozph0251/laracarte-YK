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

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('root_path');

Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about_path');

Route::get('/contact', 'App\Http\Controllers\ContactsController@create')->name('contact_path');
