<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EditProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/register",[RegisterController::class,'index'])->name('register');
Route::post("/register",[RegisterController::class,'registerpost'])->name('register');

Route::get("/login",[LoginController::class,'index'])->name('login');
Route::post("/login",[LoginController::class,'loginpost'])->name('login');

Route::get("/app",[AppController::class,'index'])->name('app');

Route::get("/profile",[ProfileController::class,'index'])->name('profile');

Route::get("/edit_profile",[EditProfileController::class,'index'])->name('edit_profile');
Route::put("/edit_profile",[EditProfileController::class,'edit'])->name('edit_profile');


