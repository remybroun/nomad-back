<?php

use App\Http\Controllers\CoworkingController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\WeworkController;
use App\Http\Controllers\ListingController;
use App\Jobs\LaunchRemovePhotosCommand;
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

Route::get('/sitemap.xml', function () {
    return File::get(public_path() . '/sitemap.xml');
});

Route::get('/', function () {
    $featuredListings = \App\Models\Listing::with(["mainListingImage", "location_slug", "close_coworkings", "latest_price"])->orderBy('is_featured', 'DESC')->orderBy('id', 'DESC')->limit(3)->get();
    return view('welcome', ['featuredListings' => $featuredListings]);
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

Route::get('list', [ListController::class, 'showListForm'])->name('list');
Route::post('/owners/join', [OwnerController::class, 'join'])->name('owner-join');


Route::get('/pricing', [PricingController::class, 'index']);


// Coworkings
Route::get('coworkings', [CoworkingController::class, 'index'])->name('coworkings');
//coworkings-locations
Route::get('coworkings/locations', [CoworkingController::class, 'showLocationsView'])->name('coworkings-locations');
Route::get('coworkings/locations/cities/{city}', [CoworkingController::class, 'showCoworkingsbyCityView'])->name('coworkings-by-city');
Route::get('coworkings/locations/{coworking}', [CoworkingController::class, 'show'])->name('coworkings-show');


// Weworks

//wework-locations-country
Route::get('coworkings/wework/locations', [WeworkController::class, 'index'])->name('wework-locations');
Route::get('coworkings/wework/locations/countries', [WeworkController::class, 'showCountries'])->name('wework-locations-countries');
Route::get('coworkings/wework/locations/countries/{country}', [WeworkController::class, 'showCountry'])->name('wework-locations-country');
Route::get('coworkings/wework/locations/cities', [WeworkController::class, 'showCities'])->name('wework-locations-cities');
Route::get('coworkings/wework/locations/cities/{city}', [WeworkController::class, 'showCity'])->name('wework-locations-city');
Route::get('coworkings/wework/locations/{wework}', [WeworkController::class, 'weWorkLocationsShow'])->name('wework-location-show');

//wework-locations-city

//Locations

Route::get('/search/locations', [App\Http\Controllers\LocationController::class, 'liveSearch'])->name('search.locations');

// Launch commands
Route::get('/launch/remove-photos', function () {
    LaunchRemovePhotosCommand::dispatch();
    return 'Photos removed';
});
