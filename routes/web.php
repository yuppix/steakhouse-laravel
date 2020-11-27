<?php

use App\Http\Controllers\SteakController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
  
Route::get('/steaks', [SteakController::class, 'list'])->name('steaks.list')->middleware('auth');
Route::get('/steaks/create', [SteakController::class, 'create'])->name('steaks.create');
Route::post('/steaks', [SteakController::class, 'store'])->name('steaks.store');
Route::get('/steaks/{id}', [SteakController::class, 'show'])->name('steaks.show')->middleware('auth');
Route::delete('/steaks/{id}', [SteakController::class, 'destroy'])->name('steaks.destroy')->middleware('auth');  

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
