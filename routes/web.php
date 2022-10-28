<?php

use App\Http\Controllers\zhController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [zhController::class, 'index'])->name('home');

Route::get('contact', [zhController::class, 'contact']);

Route::post('apply', [zhController::class, 'apply']);

Route::post('farm_data', [zhController::class, 'farm_data']);
