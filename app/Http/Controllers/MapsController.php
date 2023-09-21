<?php

namespace App\Http\Controllers;

use App\Models\map_gis;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\Penerima;
use App\Models\Progres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsController extends Controller
{
    public function index()
    {
        return view('dashboard.map', [
            // 'IrigasiDesaTerbangun' => DB::table('penerimas')->sum('IrigasiDesaTerbangun'),
            // 'IrigasiDesaBelumTerbangun' => DB::table('penerimas')->sum('IrigasiDesaBelumTerbangun'),
        ]);
    }
    public function handleChart()
    {
        // dd("a");
        $userData = Penerima::select('yAx', 'xAx')
            ->get();
        $dataArray = [];
        foreach ($userData as $data) {
            $dataArray[] = [(float)$data->yAx, (float)$data->xAx, $data->info];
        }
        $dataJSON = json_encode($dataArray);

        $a = Penerima::latest()->paginate(10);
        return view('dashboard.map', [
            'dataA' => $a,
            'dataJSON' => $dataJSON,
            // 'userData' => $userData,
            // 'users' => User::all(),
            // 'DaerahIrigasi' => Penerima::all(),
        ]);
    }
}
