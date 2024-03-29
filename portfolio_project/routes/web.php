<?php

use Illuminate\Support\Facades\Route;
use App\Models\Main;
//use App\Http\Controllers\PortfolioController;

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

Route::get('/index', [App\Http\Controllers\PortfolioController::class, 'index'])->name('index');
Route::get('/admin', [App\Http\Controllers\PortfolioController::class, 'admin'])->name('admin');
Route::get('/main',[App\Http\Controllers\MainController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
