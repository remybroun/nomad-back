<?php

use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//    if (!auth()->check()) {
//        return redirect()->route('owners.public.landing');
//    }

//    if (auth()->user()->owns_property)
//        return redirect()->route('owners-index');
//    }
//    return Inertia::render('Owners');
    return redirect()->route('owners-index');

});

//owners.public.landing
Route::get('/join', function () {
    return view('owners.public.landing');
})->name('owners.public.landing');
Route::post('/join', [OwnerController::class, 'joinForm'])->name('joinForm');
//Route::get('/owners/onboarding/init', [OwnerController::class, 'onboardingInit'])->name('onboarding-init');

Route::get('/property', function () {
    return Inertia::render('Owners');
})->name('owners-index');

//auth middleware
//Route::middleware(['auth'])->group(function () {
// Owners App in Inertia

Route::get('/property/{property}/onboarding', [OwnerController::class, 'onboarding'])->name('onboarding');
Route::post('/property/{property}/onboarding/location', [OwnerController::class, 'onboardingStepLocation'])->name('onboarding-step-location');
Route::post('/property/{property}/onboarding/propertyDetails', [OwnerController::class, 'onboardingStepPropertyDetails'])->name('onboarding-step-property-details');
Route::post('/property/{property}/onboarding/remoteWorkSetup', [OwnerController::class, 'onboardingStepRemoteWorkSetup'])->name('onboarding-step-remote-work-setup');
Route::post('/property/{property}/onboarding/photos', [OwnerController::class, 'onboardingStepPhotos'])->name('onboarding-step-photos');
//});
// require __DIR__.'/auth.php';
