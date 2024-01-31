<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;

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

Route::middleware(\App\Http\Middleware\AuthApiToken::class)->prefix('pos-admin')->group(function () {
    Route::prefix("products")->group(function(){
        Route::post("create", [ProductController::class, "create"]);
    });
});
