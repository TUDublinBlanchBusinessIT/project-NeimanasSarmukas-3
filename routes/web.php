<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cruises', function () {
    return view('cruises');
})->middleware(['auth'])->name('cruises');

require __DIR__.'/auth.php';

Route::resource('ships', App\Http\Controllers\shipController::class);


Route::resource('crew_members', App\Http\Controllers\crew_memberController::class);


Route::resource('cruises', App\Http\Controllers\cruiseController::class);


Route::resource('ports', App\Http\Controllers\portController::class);


Route::resource('passengers', App\Http\Controllers\PassengerController::class);