<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Http\Utility\UtilityFunction;
use App\Models\Organization;
use App\Models\Remuneration;
use App\Models\UserDetail;
use App\Models\User;
use App\Models\UserProfessionalDetail;
use Illuminate\Http\Request;
use Auth;
use Hash;

class ProfileController extends Controller
{
    use ValidationUtil, UtilityFunction;
    //image upload path set for works images
    protected $imagePath = 'images';
    protected $docPath = 'docs';
    protected $imageSizes = [
        'thumb' => [200, 200],
    ];

    public function update(Request $request){
        $valid = $this->profileUpdateValidMessage($request);
        if ($valid) {
            return $valid;
        }
        
        $user = User::where('id', Auth::id())->first();
        $profile_photo = $user->photo;
        if(isset($request->personal['photo']) && $request->hasFile('personal.photo')){
            $profile_photo = $this->uploadImage($request->personal['photo'], $user->uuid.'/'.$this->imagePath, $this->imageSizes);
        }
        if($request->personal && count($request->personal)){
            $user->first_name = checkDataExists($request->personal, 'first_name', $user->first_name);
            $user->last_name = checkDataExists($request->personal, 'last_name', $user->last_name);
            $user->country_code = checkDataExists($request->personal, 'country_code', $user->country_code);
            $user->mobile = checkDataExists($request->personal, 'mobile', $user->mobile);
            $user->profile_photo = $profile_photo;
            $user->timezone = $request->timezone;
            $user->save();
        

            $user_detail = UserDetail::where('user_id', $user->id)->first();
            if(!$user_detail){
                $user_detail = new UserDetail();
                $user_detail->uuid = getNewUUID();
                $user_detail->user_id = $user->id;
            }
            $user_detail->gender = checkDataExists($request->personal, 'gender', $user_detail->gender);
            $user_detail->dob = date('Y-m-d', strtotime(checkDataExists($request->personal, 'dob', $user_detail->dob)));
            $user_detail->alternate_country_code = checkDataExists($request->personal, 'alternate_country_code', $user_detail->alternate_country_code);
            $user_detail->alternate_mobile = checkDataExists($request->personal, 'alternate_mobile', $user_detail->alternate_mobile);
            $user_detail->city_id = checkDataExists($request->personal, 'city_id', $user_detail->city_id);
            $user_detail->state_id = checkDataExists($request->personal, 'state_id', $user_detail->state_id);
            $user_detail->country_id = checkDataExists($request->personal, 'country_id', $user_detail->country_id);
            $user_detail->address = checkDataExists($request->personal, 'address', $user_detail->address);
            $user_detail->latitude = checkDataExists($request->personal, 'latitude', $user_detail->latitude);
            $user_detail->longitude = checkDataExists($request->personal, 'longitude', $user_detail->longitude);
            $user_detail->pincode = checkDataExists($request->personal, 'pincode', $user_detail->pincode);
            $user_detail->save();
        }

        if($request->professional && count($request->professional)){
            $user_professional_detail = UserProfessionalDetail::where('user_id', $user->id)->first();
            if(!$user_professional_detail){
                $user_professional_detail = new UserProfessionalDetail();
                $user_professional_detail->uuid = getNewUUID();
                $user_professional_detail->user_id = $user->id;
            }
            $resume = $user_professional_detail->resume;
            if(isset($request->professional['resume']) && $request->hasFile('professional.resume')){
                $resume = $this->uploadDoc($request->professional['resume'], $user->uuid.'/'.$this->docPath);
            }
        
            $user_professional_detail->landline_no = checkDataExists($request->contact, 'landline_no', $user_professional_detail->landline_no);
            $user_professional_detail->total_experience_month = checkDataExists($request->professional, 'total_experience_month', $user_professional_detail->total_experience_month);
            $user_professional_detail->total_experience_year = checkDataExists($request->professional, 'total_experience_year', $user_professional_detail->total_experience_year);
            $user_professional_detail->current_company = checkDataExists($request->professional, 'current_company', $user_professional_detail->current_company);
            $user_professional_detail->current_designation = checkDataExists($request->professional, 'current_role', $user_professional_detail->current_designation);
            $user_professional_detail->availability = checkDataExists($request->professional, 'availability', $user_professional_detail->availability);
            $user_professional_detail->joining_availability = checkDataExists($request->professional, 'joining_availability', $user_professional_detail->joining_availability);
            $user_professional_detail->resume = $resume;
            $user_professional_detail->save();
        }

        if($request->organization && count($request->organization)){
            $user_organization_detail = Organization::where('user_id', $user->id)->first();
            if(!$user_organization_detail){
                $user_organization_detail = new Organization();
                $user_organization_detail->uuid = getNewUUID();
                $user_organization_detail->owner_id = $user->id;
            }

            $user_organization_detail->name = checkDataExists($request->organization, 'company_name', $user_organization_detail->name);
            $user_organization_detail->size = checkDataExists($request->organization, 'company_size', $user_organization_detail->size);
            $user_organization_detail->industry_type = checkDataExists($request->organization, 'industry_id', $user_organization_detail->industry_type );
            $user_organization_detail->profile_type = checkDataExists($request->organization, 'company_profile', $user_organization_detail->profile_type);
            $user_organization_detail->website = checkDataExists($request->organization, 'website_url', $user_organization_detail->website);
            $user_organization_detail->services = json_encode(checkDataExists($request->organization, 'service_types', $user_organization_detail->services));
            $user_organization_detail->contact_person_name = $user->full_name;
            $user_organization_detail->contact_person_country_code = $user->country_code;
            $user_organization_detail->contact_person_mobile = $user->mobile;
            $user_organization_detail->contact_person_email = $user->email;
            $user_organization_detail->save();
        }

        if($request->financial && count($request->financial)){
            $user_financial_detail = Remuneration::where('user_id', $user->id)->first();
            if(!$user_financial_detail && isset($request->financial['rate'])){
                foreach($request->financial['rate'] as $key => $rate){
                    $remuneration = new Remuneration();
                    $remuneration->uuid = getNewUUID();
                    $remuneration->user_id = $user->id;
                    $remuneration->currency_id = checkDataExists($request->financial, 'prefer_currency', $remuneration->currency_id);
                    $remuneration->rate = $rate;
                    $remuneration->frequency = $request->financial['rate_frequency'][$key];
                    $remuneration->save();
                }
            }
        }
        $user->profile_completion_status = 1;
        $user->save();

        return response()->json([
            'message' => 'Details Updated',
            'profile_status' => $user->profile_complete_status,
            'user' => [
                'name' => $user->full_name,
                'email' => $user->email,
                'mobile' => $user->full_mobile_no,
                'image' => $user->profile_photo,
                'image_base_url' => url('storage/'.$user->uuid.'/images/')
            ]
        ], 200);
    }

    /**
     * This method is used to change password
     * @param $request - Post data from html form
     */
    public function changePasswordSubmit(Request $request)
    {
        $valid = $this->changePasswordSubmitPasswordValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        $user = User::find(Auth::guard()->id());
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'message' => 'Password Changed',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Wrong current password',
            ], 401);
        }

    }
}
