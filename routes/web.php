<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/libraries/allbooks', [LibraryController::class, 'allbooks'])->name('libraries.allbooks')->middleware('auth');
Route::get('/libraries/authors', [LibraryController::class, 'authors'])->name('libraries.authors')->middleware('auth');

Route::resource('/' , LoginController::class)->middleware('auth');
Auth::routes();


Route::resource('libraries' , LibraryController::class)->middleware('auth'); 
// Route::get('/home', [App\Http\Controllers\LibraryController::class, 'index'])->name('Library');
