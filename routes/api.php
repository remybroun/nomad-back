<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ListingImageController;
use App\Http\Controllers\ListingPriceController;
use App\Http\Controllers\WeworkController;
use App\Http\Controllers\WeworkImageController;
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
Route::post('/forms/settle', [FormController::class, 'storeSettleForm']);
Route::post('/forms/house', [FormController::class, 'storeHouseForm']);

//Locations
Route::get('/locations/cities', [LocationController::class, 'showLocations']);
Route::get('/locations/countries', [LocationController::class, 'showCountries']);
Route::get('/locations/area/{area}', [LocationController::class, 'locationsPerArea']);

//Listings
Route::get('/listings', [ListingController::class, 'index']);
Route::post('/listings', [ListingController::class, 'store']);
Route::post('/listings/prices', [ListingPriceController::class, 'store']);
Route::post('/listings/unverified/create', [ListingController::class, 'CreateUnverifiedListing']);
Route::get('/listings/locations', [ListingController::class, 'showLocations']);
Route::get('/listings/locations/countries/{country}', [ListingController::class, 'listingsPerCountry']);
Route::get('/listings/locations/area/{area}', [ListingController::class, 'locationsPerArea']);
Route::get('/listings/locations/{location}', [ListingController::class, 'listingsPerLocation']);
Route::get('/listings/locations/{location}/preview', [ListingController::class, 'showTopThreeListingsForLocation']);
Route::get('/listings/proximity/wework', [ListingController::class, 'listingsProximityWework']);
Route::get('/listings/proximity/wework/locations', [ListingController::class, 'listingsProximityWeworkLocations']);
Route::get('/listings/selection', [ListingController::class, 'selection']);
Route::get('/listings/with-url', [ListingController::class, 'showWithUrl']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::put('/listings/{listing}', [ListingController::class, 'updatePrice']);

Route::post('/listing_images', [ListingImageController::class, 'store']);
Route::post('/listing_images/multiple', [ListingImageController::class, 'storeMultiple']);
Route::get('/listing_images', [ListingImageController::class, 'show']);
Route::get('/listings/{id}/images', [ListingImageController::class, 'listing_images_for_id']);

Route::get('listings/{listing}/visit',[ListingController::class, 'visit']);
Route::get('forms/community/visit',[ListingController::class, 'comminityVisit']);

Route::get('/coworking/wework/all', [WeworkController::class, 'all']);
Route::get('/coworking/wework/locations', [WeworkController::class, 'locations']);
Route::get('/coworking/wework/ranking', [WeworkController::class, 'ranking']);
Route::get('/coworking/wework/search', [WeworkController::class, 'searchTerms']);
Route::get('/coworking/wework/stickers', [WeworkController::class, 'stickers']);
Route::post('/coworking/wework/{wework}/upvote', [WeworkController::class, 'upvote']);
Route::post('/coworking/wework/image/store', [WeworkImageController::class, 'store']);
Route::get('/coworking/wework/{slug}', [WeworkController::class, 'show']);




//
//    Route::group([
//        'middleware' => ['api', 'cors'],
//    ], function ($router) {
//         //Add you routes here, for example:
//        Route::get('listings/{listing}/visit',[ListingController::class, 'visit']);
//    });
