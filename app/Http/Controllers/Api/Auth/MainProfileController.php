<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Utility\PassportToken;
use App\Http\Utility\UtilityFunction;
use App\Http\Utility\ValidationUtil;
use App\Models\TrainingSession;
use App\Models\Training;
use App\Models\SpecializedProfile;
use App\Models\User;
use App\Models\Subcontract;
use App\Models\BusinessLead;
use App\Models\RateCard;
use App\Models\Ticket;
use App\Models\TicketChat;
use App\Models\UserSkills;
use App\Models\UserProject;
use App\Models\UserEducation;
use App\Models\UserExperience;
use Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\DB;

class MainProfileController extends Controller
{
    //

    public function specializeProfile(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = SpecializedProfile::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new SpecializedProfile();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->slug = $request->slug;
            $user->country_code = $request->country_code ?: 0;
            $user->mobile = $request->mobile;
            $user->skills = $request->skills;
            $user->description = $request->description;
            $user->profile_photo = $request->profile_photo;
            $user->certification = $request->certification ?: 0;
            $user->document = $request->document;
            $user->status = $request->status ?: 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'specialize profile data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function destroySpecialize(SpecializedProfile $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'specialize deleted successfully',
        ]);
    }
    // Crud specialize

    public function listSpecialize(SpecializedProfile $User)
    {
        $user = Auth::user();
        $users = SpecializedProfile::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Special profile list',
        ]);
    }
    // End Specialize

    // Start training
    public function Training(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = Training::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new Training();
            $user->user_id = Auth::User()->id;
            $user->specialized_profile_id = $request->specialized_profile_id ?: 0;
            $user->slug = $request->slug;
            $user->title = $request->title;
            $user->agenda = $request->agenda;
            $user->agenda_preface = $request->agenda_preface;
            $user->skills = $request->skills;
            $user->training_mode = $request->training_mode ?: 0;
            $user->start_date = $request->start_date;
            $user->traning_duration = $request->traning_duration;
            $user->training_duration_frequency = $request->training_duration_frequency ?: 0;
            $user->address = $request->address;
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->city_id = $request->city_id ?: 0;
            $user->state_id = $request->state_id ?: 0;
            $user->country_id = $request->country_id ?: 0;
            $user->session_count = $request->session_count ?: 0;
            $user->available_seats = $request->available_seats ?: 0;
            $user->conducting_days = $request->conducting_days;
            $user->banner_image = $request->banner_image;
            $user->description = $request->description;
            $user->status = $request->status ?: 0;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'training profile data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function TrainingDelete(Training $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'training deleted successfully',
        ]);
    }

    public function listTraining(Training $User)
    {
        $user = Auth::user();
        $users = Training::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Special profile list',
        ]);
    }

    // End Training

    // Training Session

    public function TrainingSession(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = TrainingSession::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new TrainingSession();
            $user->training_id = $request->training_id ?: 0;
            $user->session_duration = $request->session_duration ?: 0;
            $user->session_duration_frequency = $request->session_duration_frequency ?: 0;
            $user->points_charge = $request->points_charge ?: 0;
            $user->document = $request->document;
            $user->preface = $request->preface;
            $user->description = $request->description;
            $user->status = $request->status ?: 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'training profile data stored',
                'data' => $user,
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function TrainingSessionDelete(TrainingSession $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'TrainingSession deleted successfully',
        ]);
    }

    public function listTrainingSession(TrainingSession $id)
    {
        $users = TrainingSession::all();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Special profile list',
        ]);
    }
    // End Training session
    public function Businessleads(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = BusinessLead::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new BusinessLead();
            $user->type = $request->type ?: 0;
            $user->heading = $request->heading;
            $user->slug = $request->slug;
            $user->skills = $request->skills ?: 0;
            $user->expected_duration = $request->expected_duration ?: 0;
            $user->expected_duration_frequency = $request->expected_duration_frequency ?: 0;
            $user->payment_frequency = $request->payment_frequency ?: 0;
            $user->payment_currency = $request->payment_currency ?: 0;
            $user->payment_cost = $request->payment_cost ?: 0;
            $user->contact_email = $request->contact_email;
            $user->contact_country_code = $request->contact_country_code;
            $user->contact_mobile = $request->contact_mobile;
            $user->city_id = $request->city_id ?: 0;
            $user->state_id = $request->state_id ?: 0;
            $user->country_id = $request->country_id ?: 0;
            $user->expected_start_date = $request->expected_start_date;
            $user->description = $request->description;
            $user->banner_image = $request->banner_image;

            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'training profile data stored',
                'data' => $user,
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function BusinessLeadDelete(BusinessLead $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'BusinessLead deleted successfully',
        ]);
    }

    public function listBusinessLead(BusinessLead $id)
    {
        $users = BusinessLead::all();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Special profile list',
        ]);
    }

    // Start SubContract

    public function Subcontract(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = Subcontract::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new Subcontract();
            $user->user_id = Auth::user()->id ?: 0;
            $user->project_name = $request->project_name;
            $user->functional_area = $request->functional_area ?: 0;
            $user->slug = $request->slug;
            $user->industry = $request->industry ?: 0;
            $user->skills = $request->skills;
            $user->city_id = $request->city_id ?: 0;
            $user->state_id = $request->state_id ?: 0;
            $user->country_id = $request->country_id ?: 0;
            $user->joining_availability = $request->joining_availability ?: 0;
            $user->expected_delivery = $request->expected_delivery ?: 0;
            $user->expected_delivery_frequency = $request->expected_delivery_frequency ?: 0;
            $user->expected_start_date = $request->expected_start_date;
            $user->expected_end_date = $request->expected_end_date;
            $user->payment_currency = $request->payment_currency ?: 0;
            $user->payment_cost = $request->payment_cost ?: 0;
            $user->payment_frequency = $request->payment_frequency ?: 0;
            $user->expected_experience_year = $request->expected_experience_year ?: 0;
            $user->expected_qualification = $request->expected_qualification ?: 0;
            $user->notes = $request->notes;
            $user->recruiter_assignment = $request->recruiter_assignment ?: 0;
            $user->recruiter_consultation_percentage = $request->recruiter_consultation_percentage ?: 0;
            $user->recruiter_email = $request->recruiter_email;
            $user->banner_image = $request->banner_image;
            $user->description = $request->description;
            $user->status = $request->status ?: 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'specialize profile data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function destroySubcontract(Subcontract $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'subcontract deleted successfully',
        ]);
    }
    // Crud specialize

    public function listSubcontract(Subcontract $User)
    {
        $user = Auth::user();
        $users = Subcontract::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Special profile list',
        ]);
    }

    //End SubContract

    // start Ratecard 

    public function Ratecard(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = RateCard::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new RateCard();
            $user->user_id = Auth::user()->id ?: 0;
            $user->job_profile = $request->job_profile;
            $user->slug = $request->slug;
            $user->skills = $request->skills;
            $user->year_of_experience = $request->year_of_experience ?: 0;
            $user->payment_currency = $request->payment_currency ?: 0;
            $user->payment_cost = $request->payment_cost ?: 0;
            $user->payment_frequency = $request->payment_frequency ?: 0;
            $user->expected_duration_frequency = $request->expected_duration_frequency ?: 0;
            $user->city_id = $request->city_id ?: 0;
            $user->state_id = $request->state_id ?: 0;
            $user->country_id = $request->country_id ?: 0;
            $user->industry = $request->industry ?: 0;
            $user->joining_availability = $request->joining_availability ?: 0;
            $user->relocation_availability = $request->relocation_availability ?: 0;
            $user->description = $request->description;
            $user->status = $request->status ?: 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'ratecard data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function destroyRatecard(Ratecard $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'ratecard deleted successfully',
        ]);
    }
    // Crud specialize

    public function listRatecard(RateCard $User)
    {
        $user = Auth::user();
        $users = RateCard::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'ratecard list',
        ]);
    }
    // End Ratecard 

    // start ticket
    public function Ticket(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = Ticket::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new Ticket();
            $user->user_id = Auth::user()->id ?: 0;
            $user->service = $request->service ?: 0;
            $user->joining_availability = $request->joining_availability ?: 0;
            $user->skills = $request->skills;
            $user->payment_currency = $request->payment_currency ?: 0;
            $user->payment_cost = $request->payment_cost ?: 0;
            $user->payment_frequency = $request->payment_frequency ?: 0;
            $user->city_id = $request->city_id ?: 0;
            $user->state_id = $request->state_id ?: 0;
            $user->country_id = $request->country_id ?: 0;
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->address = $request->address;
            $user->description = $request->description;
            $user->status = $request->status ?: 1;
            $user->save();
            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'Ticket data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function destroyTicket(Ratecard $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'ticket deleted successfully',
        ]);
    }
    // Crud specialize

    public function ListTicket(RateCard $User)
    {
        $user = Auth::user();
        $users = RateCard::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'ticket list',
        ]);
    }
    // End ticket

    // status ticket

    public function StatusTicket(Request $request)
    {

        $user = TicketChat::where('id', $request->id)
            ->first();
        $user = new TicketChat();
        $user->user_id = Auth::user()->id;
        $user->status = $request->status ?: 1;
        $user->comment = $request->comment;
        $user->save();
        return response()->json([
            'message' => 'ticket status store',
        ]);
    }

    public function ReportTickets(Request $request)
    {

        $user = TicketChat::where('id', $request->id)
            ->first();
        $user = new TicketChat();
        $user->user_id = Auth::user()->id;
        $user->comment = $request->comment;
        $user->save();
        return response()->json([
            'message' => 'Report ticket data store',
            'status' => '200 ok',
            'error' => false,
            'data' => $user,
        ]);
    }
    public function MessageTickets(Request $request)
    {

        $user = TicketChat::where('id', $request->id)
            ->first();
        $user = new TicketChat();
        $user->user_id = Auth::user()->id;
        $user->comment = $request->comment;
        return response()->json([
            'message' => 'Message ticket data store',
            'status' => '200 ok',
            'error' => false,
            'data' => $user,
        ]);
    }

    // start skill

    
}
