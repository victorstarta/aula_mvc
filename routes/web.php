<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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
    return view('welcome');
});

Route::get('/location', [LocationController::class, 'index']);

Route::get('/location/{id}', [LocationController::class, 'showState']);

Route::post('/location/save', [LocationController::class, 'store']);

Route::get('/estados', [LocationController::class, 'states']);