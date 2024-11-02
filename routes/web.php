<?php

use Illuminate\Support\Facades\Route;

// user pannel start
use App\Http\Controllers\users\HomeController;
use App\Http\Controllers\users\auth\LoginController;
use App\Http\Controllers\users\auth\Registercontroller;


// user pannel end


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

Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::get('/register', [Registercontroller::class, 'index'])->name('user.register');



