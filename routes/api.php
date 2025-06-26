<?php

use App\Http\Controllers\Api\vehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MasterMakeController;
use App\Http\Controllers\Api\MasterModelController;

Route::post('/register', [AuthController::class, 'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('hello' ,function (Request $request){
    return'test hello';


}
);

Route::post('/register', [AuthController::class, 'register']);

use App\Http\Controllers\Api\Auth\RegisterController;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/profile',[Authcontroller::class,'getProfile'])->middleware('auth:sanctum');

Route::apiResource('/makes',MasterMakeController::class);

Route::apiResource('/makes.models',MasterModelController::class);

Route::apiResource('/vehicles',vehicleController::class);