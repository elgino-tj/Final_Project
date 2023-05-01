<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;

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
    return view('layout.home');
});


Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/students/add', function () {
    return view('students.formadd');
});


Route::resource('students',StudentsController::class);

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'doLogin']);

Route::get('/logout', [LoginController::class, 'doLogout']);