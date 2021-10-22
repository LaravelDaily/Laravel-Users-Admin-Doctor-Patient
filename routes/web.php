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
    return view('home');
})->name('home');


Route::get('doctors', \App\Http\Controllers\DoctorsController::class)->name('doctors');
Route::get('patients', \App\Http\Controllers\PatientsController::class)->name('patients');
Route::get('appointments', \App\Http\Controllers\AppointmentsController::class)->name('appointments');

Route::middleware('auth')->group(function () {

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
