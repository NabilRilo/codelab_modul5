<?php
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/user', function (Request $request) {
return $request->user();
})->middleware(Authenticate::using('sanctum'));
//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::apiResource('/ikan', App\Http\Controllers\Api\IkanController::class);
Route::apiResource('/habitat', App\Http\Controllers\Api\HabitatController::class);