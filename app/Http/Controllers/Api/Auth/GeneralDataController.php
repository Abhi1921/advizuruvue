<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Utility\PassportToken;
use App\Http\Utility\UtilityFunction;
use App\Http\Utility\ValidationUtil;
use App\Models\User;
use App\Models\GeneralData;
use App\Models\Pages;
use App\Models\MasterData;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;


class GeneralDataController extends Controller
{
    public function generalData(Request $request)
    {
        DB::beginTransaction();
        try {           
                $data = new GeneralData;
                $data->technology_id = $request->input('technology_id')?:0;
                $data->type = $request->input('type')?:0;
                $data->name = $request->input('name');
                $data->slug = $request->input('slug');
                $data->short_description = $request->input('short_description');
                $data->description = $request->input('description');
                $data->image = $request->input('image');
                $data->banner_image = $request->input('banner_image');
                $data->side_image = $request->input('side_image');
                $data->theme_color = $request->input('theme_color');             
                $data->save();
            
            DB::commit();
            return response()->json([            
                'error' => 'false',
                'message' => 'data successfully registered',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {

            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' =>  $e
            ], 501);
        }
    }

    // pages
    public function pages(Request $request)
    {
        DB::beginTransaction();
        try {           
                $data = new Pages;
                $data->name = $request->input('name');
                $data->slug = $request->input('slug');
                $data->banner_image = $request->input('banner_image');
                $data->description = $request->input('description');              
                $data->status = $request->input('status')?:0;              
                $data->save();
            
            DB::commit();
            return response()->json([            
                'error' => 'false',
                'message' => 'pages data successfully registered',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {

            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' =>  $e
            ], 501);
        }
    }
    // end pages

    // master data
    public function masterData(Request $request)
    {
        DB::beginTransaction();
        try {           
                $data = new MasterData;
                $data->name = $request->input('name');
                $data->type = $request->input('type')?:0;             
                $data->status = $request->input('status')?:0;              
                $data->save();
            
            DB::commit();
            return response()->json([            
                'error' => 'false',
                'message' => 'master data successfully registered',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {

            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' =>  $e
            ], 501);
        }
    }
    // end master data

}
