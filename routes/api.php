<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api_version = config('api.api_version');

Route::group(["prefix" => "{$api_version}","namespace" => "Api"], function() {
    // register auth routes
    Route::prefix('auth')
        ->group(base_path('routes/api/auth.php'));

    Route::prefix('profile')
        ->group(base_path('routes/api/profile.php'));

    Route::prefix('general')
        ->group(base_path('routes/api/general.php'));
      
    
});
