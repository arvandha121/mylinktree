<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinktreeController;
use App\Http\Controllers\SetLocalController;

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [LinktreeController::class, 'index'])->name('index');
    Route::get('/locale/{locale?}', [SetLocalController::class, 'SetLocale'])->name('change_locale');
});

// Route to change language
// Route::get('/{locale}', [LinktreeController::class, 'SetLocale'])->name('change_locale');