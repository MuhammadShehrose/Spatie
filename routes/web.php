<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SpatieController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/role', [SpatieController::class, 'role'])->name('role');

Route::get('/permission', [SpatieController::class, 'permission'])->name('permission');

Route::get('/assign/{id}', [SpatieController::class, 'assign'])->name('assign');

Route::get('/user', [SpatieController::class, 'user'])->name('user');


Route::get('/form', [FormController::class, 'form'])->name('form');
