<?php

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
//
//Route::get('/', function () {
//    return ['Laravel' => app()->version()];
//});

#Serve Inertia App
Route::get('/', function () {
    return Inertia\Inertia::render('Welcome');
})->name('welcome');

Route::prefix('auth')->group(base_path('routes/auth.php'));
// require __DIR__.'/auth.php';
