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
        $a = DB::table('penerimas')->sum('IrigasiDesaTerbangun');
        $formattedValueA = number_format($a, 3);
        $b = DB::table('penerimas')->sum('IrigasiDesaBelumTerbangun');
        $formattedValueB = number_format($b, 3);

        $userData = map_gis::select('yAx', 'xAx', 'info')
            ->get();
        $dataArray = [];
        foreach ($userData as $data) {
            $dataArray[] = [(float)$data->yAx, (float)$data->xAx, $data->info];
        }
        $dataJSON = json_encode($dataArray);




        return view('dashboard.map', [
            'dataJSON' => $dataJSON,
            'userData' => $userData,
            'users' => User::all(),
            'DaerahIrigasi' => Penerima::all(),
            'IrigasiDesaTerbangun' => $formattedValueA,
            'IrigasiDesaBelumTerbangun' => $formattedValueB,
        ]);
    }
}
