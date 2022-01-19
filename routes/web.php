<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('portfolio', [PortfolioController::class, 'index']);


Route::get('contact/create', [ContactController::class, 'create']);
Route::post('/contactSend', [ContactController::class, 'store']);



Route::get('project/view', [ProjectController::class,'view']);

Route::get('allProjects', [ProjectController::class,'allProject']);
Route::post('/getDetails', [ProjectController::class,'getDetails']);


Route::get('project/create', [ProjectController::class,'create']);
Route::post('project/store', [ProjectController::class,'store']);