<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\masterController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;

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


Route::group(['prefix' => 'admin', 'middleware' => 'admindeauth'], function () {
    //Admin login form
    Route::get('/login', [AdminLoginController::class,'loginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class,'login'])->name('admin.login.post');
    Route::get('password/reset', [ForgetPasswordController::class,'showLinkRequestForm'])->name('admin.password.email.show');
    Route::post('password/email', [ForgetPasswordController::class,'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm']);
    Route::post('admin/password/reset', [ResetPasswordController::class,'reset'])->name('admin.password.update');
  
    
});

//Authenticated Admin
Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
    //logout
    Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Admin\RegistrationController@logout']);
   //dashboard
   Route::get('/change-password', [PasswordController::class,'changePassword'])->name('admin.password.changed');
   Route::post('/change-password', [PasswordController::class,'changePasswordSubmit'])->name('admin.password.change.submited');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');


    //users
    Route::resource('users', 'Admin\UsersController');
    Route::post('/users/status', 'Admin\UsersController@status')->name('users.status');
    Route::get('users-list', 'Admin\UsersController@listUsers')->name('users.list');
    Route::delete('/delete-users', 'Admin\UsersController@delete')->name('users.delete');
    //masters
    Route::resource('masters', 'Admin\MastersController');
    Route::post('/masters/status', 'Admin\MastersController@status')->name('masters.status');
    Route::get('masters-list', 'Admin\MastersController@listMasters')->name('masters.list');
    Route::delete('/delete-masters', 'Admin\MastersController@delete')->name('masters.delete');
    //city
    Route::resource('city', 'Admin\CityController');
    Route::post('/city/status', 'Admin\CityController@status')->name('city.status');
    Route::get('city-list', 'Admin\CityController@listCity')->name('city.list');
    Route::delete('/delete-city', 'Admin\CityController@delete')->name('city.delete');
    //States
    Route::resource('states', 'Admin\StatesController');
    Route::post('/states/status', 'Admin\StatesController@status')->name('states.status');
    Route::get('states-list', 'Admin\StatesController@listStates')->name('states.list');
    Route::delete('/delete-states', 'Admin\StatesController@delete')->name('states.delete');
    //Countries
    Route::resource('country', 'Admin\CountryController');
    Route::post('/country/status', 'Admin\CountryController@status')->name('countries.status');
    Route::get('country-list','Admin\CountryController@listCountry')->name('countries.list');
    Route::delete('/delete-country', 'Admin\CountryController@delete')->name('countries.delete');
});

// User
Auth::routes();
Route::get('/', [LoginController::class,'index'])->name('auth.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
