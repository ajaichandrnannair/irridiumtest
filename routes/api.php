<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("login",[ApiController::class,'login'])->nmae("api.login");

Route::middleware('auth:sanctum')->group(function(){

    Route::post("task",[ApiController::class,'getTask']);
});
