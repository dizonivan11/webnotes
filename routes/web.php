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

Route::get("/", "LoginController@index")->name('index');
Route::get("/index", "LoginController@index")->name('index');
Route::post("/register", "LoginController@register")->name('register');
Route::post("/login", "LoginController@login")->name('login');

Route::get("/home", "HomeController@index")->name('home');