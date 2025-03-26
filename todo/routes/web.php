<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::get("login",[AuthManager::class, "login"]);
Route::get("login",[AuthManager::class, "loginPost"])
->name("login.post");
// Route::post("register", )