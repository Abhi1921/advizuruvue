<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Http\Utility\UtilityFunction;
use App\Models\MasterData;
use App\Models\Cities;
use App\Models\States;
use App\Models\Countries;
use App\Models\Currencies;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    use ValidationUtil, UtilityFunction;

    public function masterData(Request $request){
        $valid = $this->masterDataValidMessage($request);
        if ($valid) {
            return $valid;
        }

        if($request->type == 'City'){
            $query = Cities::query()->select('name', 'uuid', 'state_id');
        }else if($request->type == 'State'){
            $query = States::query()->select('name', 'uuid', 'country_id');
        }else if($request->type == 'Country'){
            $query = Countries::query()->select('name', 'uuid', 'sortname', 'phonecode');
            if($request->q){
                $query->where('name', 'like', '%'.$request->q.'%')
                        ->orWhere('sortname', 'like', '%'.$request->q.'%')
                        ->orWhere('phonecode', 'like', '%'.$request->q.'%');
            }
        }else if($request->type == 'Currency'){
            $query = Currencies::query()->select('name', 'uuid', 'code', 'symbol');
            if($request->q){
                $query->where('name', 'like', '%'.$request->q.'%')
                        ->orWhere('code', 'like', '%'.$request->q.'%')
                        ->orWhere('symbol', 'like', '%'.$request->q.'%');
            }
        }else{
            $query = MasterData::query()->select('name', 'uuid');
        }

        if($request->q && !in_array($request->type, ['Country', 'Currency'])){
            $query->where('name', 'like', '%'.$request->q.'%');
        }

        if(!in_array($request->type, ['City', 'State', 'Country', 'Currency'])){
            $query->where('type', $request->type)->where('status', 1);
        }

        $masters = $query->take(10)->get();

        return response()->json([
            'masters' => $masters,
        ], 200);
    }

    public function staticMasterData(Request $request){
        $valid = $this->staticMasterDataValidMessage($request);
        if ($valid) {
            return $valid;
        }

        $masters = [];
        if($request->type == 'availability'){
            $masters = $this->getAvailability();
        }else if($request->type == 'joining_availability'){
            $masters = $this->getJoiningAvailability();
        }else if($request->type == 'profession_type'){
            $masters = $this->getProfessionType();
        }else if($request->type == 'rate_freuency'){
            $masters = $this->getRateFrequency();
        }else if($request->type == 'company_service_type'){
            $masters = $this->getCompanyServiceType();
        }else if($request->type == 'master_data_type'){
            $masters = $this->getMasterDataType();
        }

        return response()->json([
            'masters' => $masters,
        ], 200);
    }
}
