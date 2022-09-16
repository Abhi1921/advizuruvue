<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneralController;

Route::post('master-data', [GeneralController::class,'masterData']);
Route::post('static-master-data', [GeneralController::class,'staticMasterData']);

Route::group(['middleware' => 'auth:api'], function() {
   //
});