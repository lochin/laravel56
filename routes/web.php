<?php

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
use Illuminate\Support\Facades\Request;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::get('/{locale}', function ($locale){
    App::setLocale($locale);
    return view('index');
})->name('home');