<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProfileController;

// Profile Controller 
Route::post('update', [ProfileController::class,'update']);
Route::group(['middleware' => 'auth:api'], function() {
    
   
});