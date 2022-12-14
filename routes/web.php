<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AvgTimeToHireController;
use App\Http\Controllers\PositionCostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nlg', function () {
    return view('nlg');
});

Route::get('/nlg/absence', [AbsenceController::class, 'getDescription']);
Route::get('/nlg/avg-time-to-hire', [AvgTimeToHireController::class, 'getDescription']);
Route::get('/nlg/position-cost', [PositionCostController::class, 'getDescription']);
