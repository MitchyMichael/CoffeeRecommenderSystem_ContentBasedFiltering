<?php

use App\Http\Controllers\CafeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ChoiseController;
use App\Http\Controllers\LikeController;

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

// Landing page route
Route::get('/', function () {
    return view('landingPageView');
})->name('root');

Route::get('/dashboard', function () {
    return view('dashboardView');
});

// Saving preference to database route
Route::post('/preferences', [PreferenceController::class, 'store']);

// Recommendation page route after saving preference
Route::view('/recommendation', 'recommendationView');

// Saving coffee recommendation choise
Route::post('/save-coffee', [ChoiseController::class, 'saveCoffee']);

// Thank You View
Route::get('/thanks', function () {
    return view('thanksView');
})->name('thanks');

// Save like
Route::post('/save-like', [LikeController::class, 'saveLike']);

Route::get('/end', function () {
    return view('endView');
})->name('end');

// Super admin to add new cafe
Route::view('/superadmin', 'superAdminView');

// Cafe Controller
Route::post('/submit-cafe', [CafeController::class, 'addCafe']);
