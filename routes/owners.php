<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owners\OwnerController;

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
    return ['Laravel' => app()->version()];
});

Route::post('/join', [OwnerController::class, 'joinForm'])->name('joinForm');
Route::get('/join', [OwnerController::class, 'join'])->name('join');



// require __DIR__.'/auth.php';
