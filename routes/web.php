<?php

use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
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


//Registration page
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store_user'])->name('register');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//Home
Route::get('/home', function () {
    return view('form.index');
})->name('home');

//Results page
Route::get('/results', [ResultsController::class, 'index'])->name('results');
Route::post('/results', [ResultsController::class, 'calc']);