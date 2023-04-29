<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [ViewController::class, 'index']);


// index page undangan
Route::get('/page', [ViewController::class, 'index']);


//Main page Dashboard Admin
Route::get('/admin', [AdminController::class, 'index']);
