<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Utility\PassportToken;
use App\Http\Utility\UtilityFunction;
use App\Http\Utility\ValidationUtil;
use App\Models\LoginTrack;
use App\Models\UserProfessionalDetail;
use App\Models\UserDetail;
use App\Models\Cities;
use App\Models\User;
use App\Models\Organization;
use Auth;
use Validator;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    use UtilityFunction, ValidationUtil;
    use PassportToken;
    //image upload path set for works images
    protected $imagePath = 'images';
    protected $imageSizes = [
        'thumb' => [200, 200],
    ];

    public function index(){
        $cities = \App\Models\Cities::get();
        foreach($cities as $city){
            $city->uuid = getNewUUID();
            $city->save();
        }

        $states = \App\Models\States::get();
        foreach($states as $state){
            $state->uuid = getNewUUID();
            $state->save();
        }

        $countries = \App\Models\Countries::get();
        foreach($countries as $country){
            $country->uuid = getNewUUID();
            $country->save();
        }

        $currencies = \App\Models\Currencies::get();
        foreach($currencies as $currency){
            $currency->uuid = getNewUUID();
            $currency->save();
        }
        return "done";
    }

    public function login(Request $request)
    {
        $valid = $this->loginValidMessage($request);
        if ($valid) {
            return $valid;
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->status == '0') {
                return response()->json([
                    'message' => "You are deactivated by the admin. Please contact to Advizuru Support.",
                ], 402);
            }

            $login = LoginTrack::where('device_token', $request->device_token)->first();
            if (!$login) {
                $login = new LoginTrack();
                $login->uuid = getNewUUID();
            }
            $login->user_id = $user->id;
            $login->device_type = $request->device_type;
            $login->device_token = $request->device_token;
            $login->save();

            return response()->json([
                'message' => 'Logged in successfully',
                'role' => $user->role_id ? $user->role->name : false,
                'profile_status' => $user->profile_complete_status,
                'user' => [
                    'name' => $user->full_name,
                    'email' => $user->email,
                    'mobile' => $user->full_mobile_no,
                    'image' => $user->profile_photo,
                    'image_base_url' => url('images/profile/')
                    
                ],
                 'access token' => $user->createToken('Access Token')->accessToken,
            ], 200);
        } else {
            return response()->json([
                'message' => "Wrong Credentials",
            ], 401);
        }
    }

    public function registerSocial(Request $request){
        $valid = $this->socialRegisterValidMessage($request);
        if ($valid) {
            return $valid;
        }

        $user = User::where('email', $request->email)->first();
        if(!$user){
            $first_name = explode(' ', $request->name)[0];
            $last_name = isset(explode(' ', $request->name)[1]) ? explode(' ', $request->name)[1] : null;
            $user = new User();
            $user->uuid = getNewUUID();
            $user->email = $request->email;
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->fb_token = $request->token;
            $user->save();

            if($request->photo){
                $profile_photo = $this->uploadImageByUrl($request->photo, $user->uuid.'/'.$this->imagePath, $this->imageSizes);
                $user->profile_photo = $profile_photo;
                $user->save();
            }
        }

        if ($user->status == '0') {
            return response()->json([
                'message' => "You are deactivated by the admin. Please contact to Advizuru Support.",
            ], 402);
        }

        $login = LoginTrack::where('device_token', $request->device_token)->first();
        if (!$login) {
            $login = new LoginTrack();
            $login->uuid = getNewUUID();
        }
        $login->user_id = $user->id;
        $login->device_type = $request->device_type;
        $login->device_token = $request->device_token;
        $login->save();

        return response()->json([
            'message' => 'Logged in successfully',
            'role' => $user->role_id ? $user->role->name : false,
            'profile_status' => $user->profile_complete_status,
            'user' => [
                'name' => $user->full_name,
                'email' => $user->email,
                'mobile' => $user->full_mobile_no,
                'image' => $user->profile_photo,
                'image_base_url' => url('images/profile/')
            ],
            'access token' => $user->createToken('Access Token')->accessToken,
        ], 200);
    }

    public function register(Request $request)
    {
        $valid = $this->registerValidMessage($request);
        if ($valid) {
            return $valid;
        }

        $user = new User();
        $user->uuid = getNewUUID();
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 2;
        $user->save();

        $login = LoginTrack::where('device_token', $request->device_token)->first();
        if (!$login) {
            $login = new LoginTrack();
        }
        $login->user_id = $user->id;
        $login->device_type = $request->device_type;
        $login->device_token = $request->device_token;
        $login->save();
       
        return response()->json([
            'message' => 'Signup successful',
            'role' => $user->role_id ? $user->role->name : false,
            'profile_status' => $user->profile_complete_status,
            'user' => [
                'name' => $user->full_name,
                'email' => $user->email,
                'mobile' => $user->full_mobile_no,
                'image' => $user->profile_photo,
                'image_base_url' => url('storage/'.$user->uuid.'/images/')
            ],
            'access_token' => $user->createToken('Access Token')->accessToken,
        ], 200);
        
    }


   



    public function logout(Request $request)
    {
        if (LoginTrack::where('user_id', \Auth::id())->first()) {
            LoginTrack::where('user_id', \Auth::id())->delete();
        }

        $accessToken = $request->user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked' => true,
            ]);
        $accessToken->revoke();
        return response()->json([
            'message' => 'Logged out',
        ], 200);
    }

    // update profile photo
    public function updateProfileImage(Request $request, User $id)
    {
        $data = $request->only('profile_photo');
        $validator = Validator::make($data, [
            'profile_photo' => 'string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }
        $User = $id->update([

            'profile_photo' => $request->profile_photo,

        ]);
        //Product updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'profile_photo updated successfully',
            'data' => $id,
        ]);
    }

    public function updateAvailability(Request $request, UserProfessionalDetail $id)
    {
        $data = $request->only('availability', 'joining_availability');
        $validator = Validator::make($data, [
            'availability' => 'string',
            'joining_availability' => 'string',

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }
        $User = $id->update([

            'availability' => $request->availability,
            'joining_availability' => $request->joining_availability,
        ]);
        //Product updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'availability updated successfully',
            'data' => $id,
        ]);
    }
    
// test
 public function updateProfile(Request $request)
    {
        $user = new UserDetail;
            $user->user_id =  $request->input('user_id');
            $user->gender = $request->input('gender');
            $user->dob = date("Y-m-d", strtotime($request->input('dob')));
            $user->alternate_mobile = $request->input('alternate_mobile');
            $user->alternate_country_code = $request->input('alternate_country_code');
            $user->address = $request->input('address');
            $user->country_id = $request->input('country_id');
            $user->state_id = $request->input('state_id');
            $user->city_id = $request->input('city_id');
            $user->pincode = $request->input('pin_code');
            $user->latitude = $request->input('latitude');
            $user->longitude = $request->input('longitude');
            $user->save();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'user profile data updated',
                'data' => $user,
                       ], 201);
     
    }

    public function updateProfileOrg(Request $request)
    {
        $user = new Organization;
            $user->user_id =  $request->input('user_id');
            $user->company_name = $request->input('company_name');
            $user->company_size = $request->input('company_size')?:0;
            $user->industry_id = $request->input('industry_id')?:0;
            $user->company_profile = $request->input('company_profile')?:0;
            $user->website_url = $request->input('website_url')?:0;
            $user->service_types = $request->input('service_types');

            $user->save();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'organisation profile data Updated',
                'data' => $user,
            ], 201);

     
    }

}

