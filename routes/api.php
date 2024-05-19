<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('blogs', BlogController::class);
Route::apiResource('feedback', FeedbackController::class);
Route::apiResource('galleries', GalleryController::class);
Route::apiResource('profiles', ProfileController::class);
Route::apiResource('settings', SettingController::class);
