<?php

namespace App\Http\Utility;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Utility\UtilityFunction;
use Validator;
use Auth;

trait ValidationUtil
{
    use UtilityFunction;
    // login validator start

    protected function loginValidMessage($request)
    {
        $email_regex = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
        $this->validate($request, [
            'device_type' => 'required||'.Rule::in(['Web', 'Android', 'IOS']),
            'device_token' => 'required',
            'email' => 'required|string|email|regex:' . $email_regex . '|max:100',
            'password' => 'required|min:8|max:12',
        ]);
        
    }
    // login validator end


    protected function registerValidMessage($request)
    {
        $email_regex = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
        $this->validate($request, [
            'device_type' => 'required|'.Rule::in(['Web', 'Android', 'IOS']),
            'device_token' => 'required',
            'role_id' => 'required|string|exists:roles,uuid',
            'email' => 'required|string|email|regex:' . $email_regex . '|max:100|unique:users',
            'password' => 'required|min:8|max:12|confirmed',
            'password_confirmation' => 'required|max:20',
        ]);
    }

    protected function socialRegisterValidMessage($request){
        $email_regex = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
        $this->validate($request, [
            'device_type' => 'required|'.Rule::in(['Web', 'Android', 'IOS']),
            'device_token' => 'required',
            'email' => 'required|string|email|regex:' . $email_regex . '|max:100',
            'name' => 'required|string|max:150',
            'photo' => 'required|file|mimes:jpg,bmp,png|max:20480',
        ]);
    }

    protected function profileUpdateValidMessage($request)
    {
        //return getNewUUID();
        // $request['__role'] = Auth::user()->role->name;
        $this->validate($request, [
            'timezone' => 'required|max:255',
            'personal' => 'required|array',
            'personal.first_name' => 'required|string|max:25',
            'personal.last_name' => 'nullable|string|max:25',
            'personal.gender' => 'required_if:__role,==,Individual|'.Rule::in(['Male', 'Female', 'Transgender']),
            'personal.dob' => 'required_if:__role,==,Individual|date|before_or_equal:'.date('Y-m-d', strtotime('-18 years')),
            'personal.country_code' => 'required|max:255|'.Rule::in(array_column(json_decode(\Storage::disk('local')->get('data/country_code_json.json')), 'dial_code')),
            'personal.mobile' => 'required|numeric|digits_between:4,15',
            'personal.alternate_country_code' => 'required|max:255|'.Rule::in(array_column(json_decode(\Storage::disk('local')->get('data/country_code_json.json')), 'dial_code')),
            'personal.alternate_mobile' => 'required|numeric|digits_between:4,15',
            'personal.city_id' => 'required|numeric|exists:cities,id',
            'personal.state_id' => 'required|numeric|exists:states,id',
            'personal.country_id' => 'required|numeric|exists:countries,id',
            'personal.address' => 'required|string',
            'personal.latitude' => 'required|string|max:255',
            'personal.longitude' => 'required|string|max:255',
            'personal.pincode' => 'required|max:20',
            'personal.photo' => 'required|file|mimes:jpg,bmp,png|max:20480',
            
            'professional' => 'required_if:__role,==,Individual|array',
            'professional.primary_skill' => 'required_if:__role,==,Individual|numeric|exists:master_data,id,type,'.array_search('Skill', $this->getMasterDataType()),
            'professional.total_experience_year' => 'required_if:__role,==,Individual|numeric|max:100',
            'professional.total_experience_month' => 'required_if:__role,==,Individual|numeric|max:12',
            'professional.current_company' => 'required_if:__role,==,Individual|string|max:255',
            'professional.availability' => 'required_if:__role,==,Individual|'.Rule::in(array_keys($this->getAvailability())),
            'professional.joining_availability' => 'required_if:__role,==,Individual|'.Rule::in(array_keys($this->getJoiningAvailability())),
            'professional.current_role' => 'required_if:__role,==,Individual|'.Rule::in(array_keys($this->getProfessionType())),
            'professional.resume' => 'nullable|file|mimes:pdf,doc,docx|max:20480',

            'financial' => 'required_if:__role,==,Individual|array',
            'financial.prefer_currency' => 'required_if:__role,==,Individual|numeric|exists:currencies,id',
            'financial.rate' => 'required_if:__role,==,Individual|array|min:1',
            'financial.rate_frequency' => 'required_if:__role,==,Individual|array|min:1',
            'financial.rate.*' => 'required_if:__role,==,Individual|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'financial.rate_frequency.*' => 'required_if:__role,==,Individual|'.Rule::in(array_keys($this->getRateFrequency())),

            'contact' => 'required_if:__role,==,Organization|array',
            'contact.landline_no' => 'required_if:__role,==,Organization|max:20',
            'contact.designation' => 'required_if:__role,==,Organization|numeric|exists:master_data,id,type,'.array_search('Designation', $this->getMasterDataType()),

            'organization' => 'required_if:__role,==,Organization|array',
            'organization.company_name' => 'required_if:__role,==,Organization|string|max:255',
            'organization.company_size' => 'required_if:__role,==,Organization|numeric|max:1000000',
            'organization.industry_id' => 'required_if:__role,==,Organization|numeric|exists:master_data,id,type,'.array_search('Industry', $this->getMasterDataType()),
            'organization.company_profile' => 'required_if:__role,==,Organization|string|max:255',
            'organization.website_url' => 'required_if:__role,==,Organization|url',
            'organization.service_types' => 'required_if:__role,==,Organization|array',
            'organization.service_types.*' => 'required_if:__role,==,Organization|'.Rule::in(array_keys($this->getCompanyServiceType()))
        ]);

    }

protected function masterDataValidMessage($request)
{
    $this->validate($request, [
        'q' => 'nullable|max:255',
        'type' => 'required|'.Rule::in(array_merge(array_keys($this->getMasterDataType()), ['City', 'State', 'Country', 'Currency'])),
    ]);
}

protected function staticMasterDataValidMessage($request)
{
    $this->validate($request, [
        'type' => 'required|'.Rule::in(['availability', 'joining_availability', 'profession_type', 'rate_freuency', 'company_service_type', 'master_data_type']),
    ]);
}
    
protected function loginRegistrationValidAdmin($request)
{
    $this->validate($request, [
        'username' => 'required|min:3|max:150',
        'password' => 'required|min:6|max:12'
    ]);
}
protected function changePasswordSubmitPasswordValidAdmin($request)
{
    $this->validate($request, [
        'current_password' => 'required|min:8',
        'password' => 'required|min:8|max:12|confirmed',
        'password_confirmation' => 'required|max:255',
    ],[
        'current_password.required' => 'The Current password is required',
        'current_password.min' => 'The Current password should be minimum 8 characters',
        'password.confirmed' => "The Password doesn't match",
    ]);
}

/**
     * For validation of Admin/UsersController store() function
     *
     * @param Request $request request body from client
     * @return Validator failed validation response 
     * @return Boolean false when all the validations passes 
     */
    protected function storeUsersValidAdmin($request)
    {
        $email_regex = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
        $this->validate($request, [
            'first_name' => 'required|string|max:25',
            'last_name' => 'nullable|string|max:25',
            'email' => 'required|email|regex:'.$email_regex,
            'mobile' => 'required|numeric|digits_between:8,15',
        ], [
            'first_name.required' => 'First name is required',
            'first_name.string' => 'First name is invalid',
            'first_name.max' => 'First name should not be more than 25 characters',
            'last_name.required' => 'Last name is required',
            'last_name.string' => 'Last name is invalid',
            'last_name.max' => 'Last name should not be more than 25 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.regex' => 'Email is invalid',
            'mobile.required' => 'Mobile is required',
            'mobile.numeric' => 'Mobile is invalid',
            'mobile.digits_between' => 'Mobile is invalid'
        ]);
    }
    /**
     * For validation of Admin/MastersController store() function
     *
     * @param Request $request request body from client
     * @return Validator failed validation response 
     * @return Boolean false when all the validations passes 
     */
    protected function storeMastersValidAdmin($request)
    {
   
        $this->validate($request, [
            'type' => 'required',
            'name' => 'string|max:25|required',
            
        ], [
            'name.required' => 'Name is required',
            'name.string' => 'Name is invalid',
            'name.max' => 'Name should not be more than 25 characters',
            'type.required' => 'Type is required',
            
        ]);
    }
    /**
     * For validation of Admin/CityController store() function
     *
     * @param Request $request request body from client
     * @return Validator failed validation response 
     * @return Boolean false when all the validations passes 
     */
    protected function storeCityValidAdmin($request)
    {
   
        $this->validate($request, [
            'uuid' => 'required',
            'city' => 'string|max:25|required',
            
        ], [
            'city.required' => 'City Name is required',
            'city.string' => 'City Name is invalid',
            'city.max' => 'City Name should not be more than 25 characters',
            'uuid.required' => 'ID is required',
            
        ]);
    }
    /**
     * For validation of Admin/StatesController store() function
     *
     * @param Request $request request body from client
     * @return Validator failed validation response 
     * @return Boolean false when all the validations passes 
     */
    protected function storeStatesValidAdmin($request)
    {
   
        $this->validate($request, [
            'uuid' => 'required',
            'state' => 'string|max:25|required',
            
        ], [
            'state.required' => 'State Name is required',
            'state.string' => 'State Name is invalid',
            'state.max' => 'State Name should not be more than 25 characters',
            'uuid.required' => 'ID is required',
            
        ]);
    }
    /**
     * For validation of Admin/CountryController store() function
     *
     * @param Request $request request body from client
     * @return Validator failed validation response 
     * @return Boolean false when all the validations passes 
     */
    protected function storeCountryValidAdmin($request)
    {
   
        $this->validate($request, [
            'uuid' => 'required',
            'country' => 'string|max:25|required',
            
        ], [
            'country.required' => 'Country Name is required',
            'country.string' => 'Country Name is invalid',
            'country.max' => 'Country Name should not be more than 25 characters',
            'uuid.required' => 'ID is required',
            
        ]);
    }

    protected function SocialSignupValidMessage($request)
    {
        $email_regex = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
        $validator = Validator::make($request->all(), [
           
            'email' => 'required|string|email|regex:' . $email_regex . '|max:100|unique:users',
            'first_name' => 'required|string|max:25',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
    }
   
}