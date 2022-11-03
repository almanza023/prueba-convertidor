<?php

use App\Http\Controllers\Auth\LoginController;
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


Route::get('/', [LoginController::class, 'showLoginForm'])->name("view.login");
Route::get('/registro', [LoginController::class, 'viewRegister'])->name("view.registro");
Route::post('/login', [LoginController::class, 'login'])->name("login");
Route::get('/home', [LoginController::class, 'viewHome'])->name("home");
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");

