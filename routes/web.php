<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboardView');
});

// View Route
Route::view('/coldOrHot', 'coldOrHotView');
Route::view('/mood', 'moodView');
Route::view('/activity', 'activityView');
Route::view('/milk', 'withMilk');
Route::view('/sugar', 'withSugar');
