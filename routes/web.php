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

// Landing Page Route
Route::get('/', function () {
    return view('dashboardView');
});

// User Input Route
Route::view('/coldOrHot', 'coldOrHotView');
Route::view('/mood', 'moodView');
Route::view('/activity', 'activityView');
Route::view('/milk', 'withMilkView');
Route::view('/sugar', 'withSugarView');

// Recommendation Page
Route::view('/3rec', '3RecView');
Route::view('/recChoise', 'recChoiseView');
