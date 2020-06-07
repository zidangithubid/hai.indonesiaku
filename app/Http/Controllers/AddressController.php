<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\Village;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function city($id_prov)
    {
        $cities = City::where('province_id', $id_prov)->get();
        return response()->json([
            'success' => true,
            'data' => $cities,
        ]);
    }

    public function district($id_city)
    {
        $districts = District::where('city_id', $id_city)->get();
        return response()->json([
            'success' => true,
            'data' => $districts,
        ]);
    }

    public function village($id_district)
    {
        $villages = Village::where('district_id', $id_district)->get();
        return response()->json([
            'success' => true,
            'data' => $villages,
        ]);
    }
}
