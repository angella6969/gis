<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Regency;
use Laravolt\Indonesia\Models\District;

class WilayahController extends Controller
{
    // public function getRegencies($provinceId)
    // {
    //     $regencies = Regency::where('province_id', $provinceId)->pluck('name', 'id');
    //     return response()->json($regencies);
    // }

    // public function getDistricts($regencyId)
    // {
    //     $districts = District::where('regency_id', $regencyId)->pluck('name', 'id');
    //     return response()->json($districts);
    // }
}
