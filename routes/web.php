<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ChoiseController;

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
    return view('dashboardView');
})->name('root');

// Saving preference to database route
Route::post('/preferences', [PreferenceController::class, 'store']);

// Recommendation page route after saving preference
Route::view('/recommendation', 'recommendationView');

// Saving coffee recommendation choise
Route::post('/save-coffee', [ChoiseController::class, 'saveCoffee']);
