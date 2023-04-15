<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\CustomerController;

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
Route::prefix('auth')->name('customers.')->group(function (){
    Route::get('/login',[CustomerController::class, 'login'])->name('login');
    Route::post('/login',[CustomerController::class, 'handleLogin'])->name('handleLogin');

    Route::get('/register',[CustomerController::class, 'register'])->name('register');
    Route::get('/register',[CustomerController::class, 'register'])->name('register');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
