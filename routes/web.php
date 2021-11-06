<?php

use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultsController;
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


//Main page
Route::get('/', function () {
    return view('form.index');
})->name('main');

//Results page
Route::get('/results', [ResultsController::class, 'index'])->name('results');
Route::post('/results', [ResultsController::class, 'calc']);