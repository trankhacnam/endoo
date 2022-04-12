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
    return redirect()->route('user.home');;
});



Route::namespace('User')->prefix('pages')->group(function() {
    Route::get('home', 'HomeController@index')->name('user.home');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::namespace('Admin')->prefix('admin')->group(function() {
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::resource('blogs', 'BlogController');
    });
});

Auth::routes(['verify' => true]);

