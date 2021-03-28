<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class RegionController extends Controller
{
    public function province()
    {
    	$province = Province::all();
    	return response()->json($province, 200);
    }

    public function regency(Request $request)
    {
        $id = $request->id;
    	$regency = Regency::where('province_id',$id)->get();
    	return response()->json($regency, 200);
    }

    public function district(Request $request)
    {
        $id = $request->id;
    	$district = District::where('regency_id',$id)->get();
    	return response()->json($district, 200);
    }

    public function village(Request $request)
    {
        $id = $request->id;
    	$village = Village::where('district_id',$id)->get();
    	return response()->json($village, 200);
    }
}
