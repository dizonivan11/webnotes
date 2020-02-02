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

Route::get("/", "LoginController@Index")->name('index');
Route::post("/register", "LoginController@Register")->name('register');
Route::post("/login", "LoginController@Login")->name('login');

Route::get("/home", "HomeController@Index")->name('home');