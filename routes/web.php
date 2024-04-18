<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\EmailController;

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

Route::get('/', function () {
    return view('layouts.principal');
});

Route::get('/Personal', function () {
    return view('Personal.index');
});

Route::resource('/Personal', 'App\Http\Controllers\PersonalController');

Route::resource('Telefono', 'App\Http\Controllers\TelefonoController');
Route::get('/Telefono/{id}/create', [TelefonoController::class, 'create']);
Route::get('/Telefono/{id}/eliminar', [TelefonoController::class, 'eliminar']);


Route::resource('Email', 'App\Http\Controllers\EmailController');
Route::get('/Email/{id}/create', [EmailController::class, 'create']);
Route::get('/Email/{id}/eliminar', [EmailController::class, 'eliminar']);

