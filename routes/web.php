<?php

use App\Http\Controllers\CoworkingController;
use App\Http\Controllers\ListingController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/listings', [ListingController::class], 'showListings')->name('listings');
Route::get('listings', [ListingController::class, 'showListings'])->name('listings');

//Route::get('/listings/{listing}', [ListingController::class], 'showView')->name('listing.show');
Route::get('listings/locations', [ListingController::class, 'showLocationsView'])->name('listings-locations');
Route::get('listings/locations/proximity/wework', [ListingController::class, 'showProximityWeWorkView'])->name('listings-locations-proximity-wework');
Route::get('listings/locations/proximity/wework/cities', [ListingController::class, 'showProximityWeWorkCityAll'])->name('listings-proximity-wework-city-all');
Route::get('listings/locations/proximity/wework/cities/{city}', [ListingController::class, 'showProximityWeWorkShowView'])->name('listings-proximity-wework-city-show');
Route::get('listings/locations/area/{area}', [ListingController::class, 'showListingsInAreaView'])->name('listings-locations-area');
Route::get('listings/locations/countries/{country}', [ListingController::class, 'showCountryView'])->name('listings-locations-country');

Route::get('listings/locations/{location}', [ListingController::class, 'showLocationView'])->name('listings-locations-show');

Route::get('listings/{listing}', [ListingController::class, 'showView'])->name('listing.show');


// Coworkings
Route::get('coworkings', [CoworkingController::class, 'show'])->name('coworkings');
//coworkings-locations
Route::get('coworkings/locations', [CoworkingController::class, 'showLocationsView'])->name('coworkings-locations');
