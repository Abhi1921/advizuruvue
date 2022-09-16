<?php

namespace App\Http\Controllers\Api\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Utility\PassportToken;
use App\Http\Utility\UtilityFunction;
use App\Http\Utility\ValidationUtil;
use App\Models\UserExperience;
use App\Models\UserEducation;
use App\Models\UserSkills;
use App\Models\User;
use App\Models\Remuneration;
use App\Models\UserVisa;
use App\Models\UserReviews;
use App\Models\UserProject;
use Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
// user skill data submited
    public function UserSkill(Request $request)
    {

        DB::beginTransaction();
        try {
            $user = UserSkills::where('id', $request->id)
            ->first();
            if(!$user)
            $user = new UserSkills;
            $user->user_id =Auth::User()->id;
            $user->skill_id = $request->input('skill_id')?:0;
            $user->description = $request->input('description');
            $user->year_of_experience = $request->input('year_of_experience')?:0;
            $user->projects_done = $request->input('projects_done')?:0;
            $user->proficiency = $request->input('proficiency')?:0;
            $user->primary = $request->input('primary')?:0;
            $user->status = $request->input('status')?:1;
            $user->save();
            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'User Skills data stored',
                'data' => $user,
            ], 200);
        } catch (\Exception$e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }
// User_skill data submit end

// delete skill start 

    public function destroy(UserSkills $id)
    {
       $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'skill deleted successfully',
        ]);
    }

//  END user skills delete

// list all user skills

public function list(UserSkills $User)
{
$user=Auth::user();
$users=UserSkills::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user skills list',
]);
}

// END user skills list


// Start my project 

    public function UserProject(Request $request)
    {
        DB::beginTransaction();
        try {
        $user = UserProject::where('id', $request->id)
        ->first();
        if(!$user)
        $user = new UserProject;
        $user->user_id = Auth::User()->id;
        $user->name = $request->input('name');
        $user->start_date = date("Y-m-d", strtotime($request->input('start_date')));
        $user->end_date = date("Y-m-d", strtotime($request->input('end_date')));
         $user->ongoing = $request->input('ongoing')?:0;
        $user->description = $request->input('description');
        $user->skills = $request->input('skills');
        $user->status = $request->input('status')?:1;
        $user->save();
        DB::commit();
        return response()->json([
            'status' => '200 ok',
            'error' => 'false',
            'message' => 'Project stored successfully',
            'data' => $user,
        ], 200);
    } catch (\Exception$e) {
        DB::rollBack();
        return response()->json([
            'status' => '200',
            'error' => true,
            'message' => $e,
        ], 400);
    }}
//User Project data stored

// delete project

    public function destroyProject(UserProject $id)
    {
        $id->delete();

        return response()->json([
            'success' => true,
            'message' => 'Project deleted successfully',
        ]);
    }

// delete END Project

//list project  

public function listProject(UserProject $User)
{
$user=Auth::user();
$users=UserProject::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user skills list',
]);
}

// End list project


// User Eduction 
    public function userEducation(Request $request)
    {
        DB::beginTransaction();
        try {
        $user = UserEducation::where('id', $request->id)
        ->first();
        if(!$user)
        $user = new UserEducation;
        $user->user_id = Auth::User()->id;
        $user->qualification = $request->input('qualification')?:0;
        $user->institute = $request->input('institute')?:0;
        $user->branch = $request->input('branch')?:0;
        $user->completion_year = $request->input('completion_year');
        $user->status = $request->input('status')?:1;
        $user->save();
        DB::commit();
        return response()->json([
            'status' => '200 ok',
            'error' => 'false',
            'message' => 'UserEducation data Successfully stored',
            'data' => $user,
        ], 200);
    } catch (\Exception$e) {
        DB::rollBack();
        return response()->json([
            'status' => '200',
            'error' => true,
            'message' => $e,
        ], 400);
    }}
// Education End

// Crud EDucation

    public function destroyEducation(UserEducation $id)
    {
        $id->delete();

        return response()->json([
            'success' => true,
            'message' => 'Education deleted successfully',
        ]);
    }

// Crud END Education

// list education

public function listEducation(UserEducation $User)
{
$user=Auth::user();
$users=UserProject::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,                                                                         
    "user"=>$users,
    'message' => 'user education list',
]);
}
// end list education

    public function Experience(Request $request)
    {
        DB::beginTransaction();
        try {
        $user = UserExperience::where('id', $request->id)
        ->first();
        if(!$user)
        $user = new UserExperience;
        $user->user_id = Auth::User()->id;
        $user->company_name = $request->input('company_name');
        $user->designation = $request->input('designation')?:0;
        $user->start_date = date("Y-m-d", strtotime($request->input('start_date')));
        $user->end_date = date("Y-m-d", strtotime($request->input('end_date')));
        $user->description = $request->input('description');
        $user->status = $request->input('status')?:1;
        $user->save();
        return response()->json([
            'status' => '200 ok',
            'error' => 'false',
            'message' => 'Experience data Successfully stored',
            'data' => $user,
        ], 400);
    } catch (\Exception$e) {
        DB::rollBack();
        return response()->json([
            'status' => '200',
            'error' => true,
            'message' => $e,
        ], 200);
    }}
// Experience End

// CRUD Experience

    public function destroyExperience(UserExperience $User)
    {
        $User->delete();
        return response()->json([
            'success' => true,
            'message' => 'Experience deleted successfully',
        ]);
    }

// Crud Experience

// list education
public function listExperience(UserExperience $User)
{
$user=Auth::user();
$users=UserProject::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user education list',
]);
}

// end list eduaction

    public function userRemuneration(Request $request)
    {
        DB::beginTransaction();
        try {
        $user = Remuneration::where('id', $request->id)
        ->first();
        if(!$user)
        $user = new Remuneration ;
        $user->user_id = Auth::User()->id;
        $user->currency_id = $request->input('currency_id')?:0;
        $user->rate = $request->input('rate')?:0;
        $user->frequency = $request->input('frequency')?:0;
        $user->status = $request->input('status')?:0;
        $user->save();
        DB::commit();
        return response()->json([
            'status' => '200 ok',
            'error' => 'false',
            'message' => 'Remuneration data Successfully stored',
            'data' => $user,
        ], 200);
    } catch (\Exception$e) {
        DB::rollBack();
        return response()->json([
            'status' => '200',
            'error' => true,
            'message' => $e,
        ], 400);
    }}

// REMUNERATION End

// Crud Remuration
    public function destroyRemuneration(Remuneration $User)
    {
        $User->delete();

        return response()->json([
            'success' => true,
            'message' => 'Remuneration deleted successfully',
        ]);
    }

// Crud rumeration
public function listRemuneration(Remuneration $User)
{
$user=Auth::user();
$users=Remuneration::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user remuneration list',
]);
}

  public function userVisa(Request $request)
    {
        DB::beginTransaction();
        try {
        $user = UserVisa::where('id', $request->id)
        ->first();
        if(!$user)
        $user = new UserVisa;
        $user->user_id = Auth::User()->id;
        $user->country_id = $request->input('country_id')?:0;
        $user->visa_type = $request->input('visa_type');
        $user->status = $request->input('status')?:1;
        $user->save();
        DB::commit();
        return response()->json([
            'status' => '200 ok',
            'error' => 'false',
            'message' => 'Visa data Successfully stored',
            'data' => $user,
        ], 200);
    } catch (\Exception$e) {
        DB::rollBack();
        return response()->json([
            'status' => '200',
            'error' => true,
            'message' => $e,
        ], 400);
    }}
    // visa end

    // CRUD visa

    public function destroyvisa(UserVisa $User)
    {
        $User->delete();
        return response()->json([
            'success' => true,
            'message' => 'visa deleted successfully',
        ]);
    }
// Crud visa

public function listVisa(UserVisa $User)
{
$user=Auth::user();
$users=UserVisa::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user visa list',
]);
}

// Review
public function userReviews(Request $request)
{
    DB::beginTransaction();
    try {
    $user = UserReviews::where('id', $request->id)
    ->first();
    if(!$user)
    $user = new UserReviews;
    $user->user_id = Auth::User()->id;
    $user->reviewer_id = $request->input('reviewer_id')?:0;
    $user->review = $request->input('review');
    $user->status = $request->input('status')?:1;
    $user->save();
    DB::commit();
    return response()->json([
        'status' => '200 ok',
        'error' => 'false',
        'message' => 'Review Successfully stored',
        'data' => $user,
    ], 200);
} catch (\Exception$e) {
    DB::rollBack();
    return response()->json([
        'status' => '200',
        'error' => true,
        'message' => $e,
    ], 400);
}}
// visa end

// User Review

public function listReview(UserReviews $User)
{
$user=Auth::user();
$users=UserReviews::where('user_id',$user->id)->orderBy('id')->get();

return response()->json([
    'success' => true,
    "user"=>$users,
    'message' => 'user reviews visa list',
]);
}
}


