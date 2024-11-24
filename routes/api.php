<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    //    dd(\request()->isProduction());
        Route::post('register', [AuthenticationController::class, 'register']);
        Route::post('login', [AuthenticationController::class, 'login']);
});