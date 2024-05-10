<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\HatController;
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
    return view('welcome');
})->name('guests.index');

Route::get('/hats', [HatController::class, 'index'])->name('guests.hats.index');
Route::get('/hats/{hat}', [HatController::class, 'show'])->name('guests.hats.show');
