<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')  //localhost:8000/admin/posts // route('admin.listapost')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('/posts', 'PostController');
        // Route::get('/posts', 'PostController@index')->name('listapost');
    });



Route::get("{any?}", function(){
    return view("guest.home");

})->where("any",".*");