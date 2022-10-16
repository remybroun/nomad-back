<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ListingImageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Forms
Route::get('/forms', [FormController::class, 'index']);
Route::post('/forms', [FormController::class, 'store']);
Route::post('/forms/host', [FormController::class, 'storeHostAnswers']);

//Locations
Route::get('/locations/cities', [LocationController::class, 'showLocations']);
Route::get('/locations/countries', [LocationController::class, 'showCountries']);
Route::get('/locations/area/{area}', [LocationController::class, 'locationsPerArea']);

//Listings
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/locations', [ListingController::class, 'showLocations']);
Route::get('/listings/locations/countries/{country}', [ListingController::class, 'listingsPerCountry']);
Route::get('/listings/locations/area/{area}', [ListingController::class, 'locationsPerArea']);
Route::get('/listings/locations/{location}', [ListingController::class, 'listingsPerLocation']);
Route::get('/listings/locations/{location}/preview', [ListingController::class, 'showTopThreeListingsForLocation']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::post('/listings', [ListingController::class, 'store']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::post('/listing_images', [ListingImageController::class, 'store']);
Route::get('/listing_images', [ListingImageController::class, 'show']);
Route::get('/listings/{id}/images', [ListingImageController::class, 'listing_images_for_id']);

Route::get('listings/{listing}/visit',[ListingController::class, 'visit']);

//
//    Route::group([
//        'middleware' => ['api', 'cors'],
//    ], function ($router) {
//         //Add you routes here, for example:
//        Route::get('listings/{listing}/visit',[ListingController::class, 'visit']);
//    });
