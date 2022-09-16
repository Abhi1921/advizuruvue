<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\GeneralDataController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\Auth\MainProfileController;
use App\Http\Controllers\Api\Auth\BlogController;

Route::post('signup', [LoginController::class,'register']);
Route::post('login', [LoginController::class,'login']);
Route::post('social-signup', [LoginController::class,'registerSocial']);
Route::post('forgot-password', [ForgotPasswordController::class,'sendResetLinkEmail']);

// Profile Controller 
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('/change-password', [ProfileController::class,'changePasswordSubmit'])->name('admin.password.change.submit');
    Route::post('logout', [LoginController::class,'logout'])->name('auth.logout');
    // profile Image update

    Route::post('user/profile/update',[LoginController::class,'updateProfile']);

    // availability update

     Route::put('user-availability/update/{id}',[LoginController::class,'updateAvailability']);
     
    // User Skill Profile Section

    Route::post('user/skill', [ProfileController::class,'UserSkill'])->name('auth.userskill');
    Route::delete('user-skill/delete/{id}',[ProfileController::class,'destroy']);
    Route::get('user-skill/list',[ProfileController::class,'list']);

// User Project Section

     Route::post('user/project', [ProfileController::class,'UserProject'])->name('auth.userproject');
    Route::delete('user-project/delete/{id}',[ProfileController::class,'destroyProject']);
    Route::get('user-project/list',[ProfileController::class,'listProject']);

    // User Education

    Route::post('user/education', [ProfileController::class,'userEducation'])->name('auth.usereducation');
    Route::delete('user-education/delete/{id}',[ProfileController::class,'destroyEducation']);
    Route::get('user-education/list',[ProfileController::class,'listProject']);

    // User Experience

     Route::post('user/experience', [ProfileController::class,'Experience'])->name('auth.userexperience');
     Route::delete('user-experience/delete/{id}',[ProfileController::class,'destroyExperience']);
     Route::get('user-experience/list',[ProfileController::class,'listExperience']);

     // User Rumeration

     Route::post('user/remuneration', [ProfileController::class,'userRemuneration'])->name('auth.useremuneration');
     Route::delete('user-remuneration/delete/{id}',[ProfileController::class,'destroyRemuneration']);
     Route::get('user-remuneration/list',[ProfileController::class,'listRemuneration']);

       // User visa

       Route::post('user/visa', [ProfileController::class,'userVisa'])->name('auth.usevisa');
       Route::delete('user-visa/delete/{id}',[ProfileController::class,'destroyVisa']);
       Route::get('user-visa/list',[ProfileController::class,'listVisa']);
    //    Review

    Route::get('user-review/list',[ProfileController::class,'listReview']);
    Route::post('user/review', [ProfileController::class,'userReviews'])->name('auth.usereview');  
});


// Start GeneralController UnAuthentication

Route::post('general/data', [GeneralDataController::class,'generalData'])->name('auth.generaldata');
Route::post('pages', [GeneralDataController::class,'pages'])->name('auth.pages');
Route::post('master/data', [GeneralDataController::class,'masterData'])->name('auth.masterdata');

// End GeneralController UnAuthentication


// MainProfileController   Authentication
Route::group(['middleware' => 'auth:api'], function() {

    // specialize 
    Route::post('specialize/profile',[MainProfileController::class,'specializeProfile']);
    Route::delete('specialize/delete/{id}', [MainProfileController::class,'destroySpecialize'])->name('auth.specializedestroy');  
    Route::get('user-specialize/list',[MainProfileController::class,'listSpecialize']);

// Training module

  Route::post('training/profile',[MainProfileController::class,'Training']);
  Route::delete('training/delete/{id}', [MainProfileController::class,'TrainingDelete']);
  Route::get('user-training/list',[MainProfileController::class,'listTraining']);
  
  // Training Session
  Route::post('training/session',[MainProfileController::class,'TrainingSession']);
  Route::delete('training/session/delete/{id}', [MainProfileController::class,'TrainingSessionDelete']);
  Route::get('training/session/list',[MainProfileController::class,'listTrainingSession']);

  // Training Session
  Route::post('businesslead',[MainProfileController::class,'Businessleads']);
  Route::delete('training/session/delete/{id}', [MainProfileController::class,'BusinessleadsDelete']);
  Route::get('training/session/list',[MainProfileController::class,'listBusinessleads']);

// Subcontract
    
  Route::post('sub-contract',[MainProfileController::class,'Subcontract']);
  Route::delete('delete/sub-contract/{id}', [MainProfileController::class,'destroySubcontract']);
  Route::get('list/sub-contract',[MainProfileController::class,'listSubcontract']);

  // Ratecard
    
  Route::post('rate-card',[MainProfileController::class,'Ratecard']);
  Route::delete('delete/rate-card/{id}', [MainProfileController::class,'destroyRatecard']);
  Route::get('list/rate-card',[MainProfileController::class,'listRatecard']);
  
  // Ticket
  Route::post('tickets',[MainProfileController::class,'Ticket']);
  Route::delete('delete/tickets/{id}', [MainProfileController::class,'destroyTicket']);
  Route::get('list/tickets',[MainProfileController::class,'ListTicket']);
  Route::post('status/tickets',[MainProfileController::class,'StatusTicket']);
  Route::post('report/tickets',[MainProfileController::class,'ReportTickets']);
  Route::post('message/tickets',[MainProfileController::class,'MessageTickets']);

  
 // blogs

 Route::post('update/blogs',[BlogController::class,'blog']);
 Route::delete('delete/blogs/{id}', [BlogController::class,'destroyBlog']);
 Route::get('list/blogs',[BlogController::class,'listBlog']);

  // recharge

  Route::post('update/blogs',[BlogController::class,'blog']);
 Route::delete('delete/blogs/{id}', [BlogController::class,'destroyBlog']);
 Route::get('list/blogs',[BlogController::class,'listBlog']);
});
 
// Test 
// signup individual or Organisation
Route::post('/update/profile',[LoginController::class,'updateProfile']);
Route::post('/update/profileorg',[LoginController::class,'updateProfileOrg']);