<?php

namespace App\Http\Controllers;

use App\Models\csv;
use App\Models\map_gis;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\Penerima;
use App\Models\Progres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
        $b = csv::all();
        // dd($b);
        $userData = Penerima::select('yAx', 'xAx')
            ->get();
        $dataArray = [];
        foreach ($userData as $data) {
            $dataArray[] = [(float)$data->yAx, (float)$data->xAx, $data->info];
        }
        $dataJSON = json_encode($dataArray);

        $a = Penerima::latest()->get();

        return view('dashboard.map', [
            'dataA' => $a,
            'dataJSON' => $dataJSON,
        ]);
    }

    public function aksesFileJson()
    {
        // // json 
        // $pathToJsonFile = public_path('json\Jumlah Penerima Per Kecamatan_WKT_6.json');

        // $jsonContent = file_get_contents($pathToJsonFile);

        // // Parse isi JSON menjadi array atau objek
        // $data = json_decode($jsonContent);
        // // dd($data);
        // // Cek apakah ada elemen dalam array 'features'
        // if (isset($data->features) && is_array($data->features)) {
        //     // Loop melalui elemen-elemen dalam array 'features'
        //     foreach ($data->features as $feature) {
        //         // Mengakses properti 'WKT' dari setiap elemen
        //         $wkt = $feature->properties->WKT;
        //         // $NUMPOINTS = $feature->properties->NUMPOINTS;
        //         $WADMKC = $feature->properties->WADMKC;
        //         $WADMKK = $feature->properties->WADMKK;
        //         $WADMPR = $feature->properties->WADMPR;

        //         // Lakukan apa yang Anda butuhkan dengan nilai $wkt di sini
        //         // dd($wkt,$NUMPOINTS, $WADMKC, $WADMKK,$WADMPR);

        //         $pattern = '/\(\(([^\)]+)\)\)/'; // Pola untuk mencocokkan koordinat dalam dua tanda kurung besar
        //         preg_match($pattern, $wkt, $matches);

        //         if (isset($matches[1])) {
        //             // Mendapatkan koordinat dalam bentuk string
        //             $koordinatString = $matches[1];

        //             // Membagi string koordinat menjadi array koordinat
        //             $koordinatArray = explode(',', $koordinatString);
        //             // Inisialisasi array untuk koordinat poligon
        //             $koordinatPoligon = [];


        //             foreach ($koordinatArray as $koordinat) {
        //                 // Ganti karakter-karakter khusus atau spasi tambahan dengan spasi biasa
        //                 $koordinat = str_replace(['(', ')'], '', $koordinat);

        //                 // Pisahkan koordinat menjadi longitude dan latitude
        //                 list($longitude, $latitude) = explode(' ', trim($koordinat));

        //                 if ($longitude != 0 && $latitude != 0) {
        //                     // Tambahkan koordinat dalam format yang diinginkan ke dalam koordinat poligon
        //                     $koordinatPoligon[] = [(float)trim($longitude), (float)trim($latitude)];
        //                 }
        //             }

        //             $geoJSON = [
        //                 $koordinatPoligon
        //             ];

        //             // Mengganti posisi koordinat
        //             foreach ($geoJSON[0] as &$koordinat) {
        //                 $temp = $koordinat[0];
        //                 $koordinat[0] = $koordinat[1];
        //                 $koordinat[1] = $temp;
        //             }

        //             $geoJSONString = json_encode($geoJSON);

        //             dd($geoJSONString);
        //         }
        //     }
        // } else {
        //     // Handle jika 'features' tidak ditemukan atau bukan array
        //     return response()->json(['error' => 'Struktur JSON tidak sesuai'], 400);
        // }





        // cadangan 
        $pathToJsonFile = public_path('json\Jumlah Penerima Per Kecamatan_WKT_6.json');

        $jsonContent = file_get_contents($pathToJsonFile);

        // Parse isi JSON menjadi array atau objek
        $data = json_decode($jsonContent);

        // Inisialisasi array untuk menyimpan semua data yang diproses
        $allData = [];

        // Cek apakah ada elemen dalam array 'features'
        if (isset($data->features) && is_array($data->features)) {
            // Loop melalui elemen-elemen dalam array 'features'
            foreach ($data->features as $feature) {
                // Mengakses properti 'WKT' dari setiap elemen
                $wkt = $feature->properties->WKT;
                $NUMPOINTS = $feature->properties->NUMPOINTS;
                $WADMKC = $feature->properties->WADMKC;
                $WADMKK = $feature->properties->WADMKK;
                $WADMPR = $feature->properties->WADMPR;

                // Lakukan apa yang Anda butuhkan dengan nilai $wkt di sini
                // dd($wkt,$NUMPOINTS, $WADMKC, $WADMKK,$WADMPR);

                $pattern = '/\(\(([^\)]+)\)\)/'; // Pola untuk mencocokkan koordinat dalam dua tanda kurung besar
                preg_match($pattern, $wkt, $matches);

                if (isset($matches[1])) {
                    // Mendapatkan koordinat dalam bentuk string
                    $koordinatString = $matches[1];

                    // Membagi string koordinat menjadi array koordinat
                    $koordinatArray = explode(',', $koordinatString);
                    // Inisialisasi array untuk koordinat poligon
                    $koordinatPoligon = [];

                    foreach ($koordinatArray as $koordinat) {
                        // Ganti karakter-karakter khusus atau spasi tambahan dengan spasi biasa
                        $koordinat = str_replace(['(', ')'], '', $koordinat);

                        // Pisahkan koordinat menjadi longitude dan latitude
                        list($longitude, $latitude) = explode(' ', trim($koordinat));

                        if ($longitude != 0 && $latitude != 0) {
                            // Tambahkan koordinat dalam format yang diinginkan ke dalam koordinat poligon
                            $koordinatPoligon[] = [(float)trim($longitude), (float)trim($latitude)];
                        }
                    }

                    $geoJSON = [
                        $koordinatPoligon
                    ];

                    // Mengganti posisi koordinat
                    foreach ($geoJSON[0] as &$koordinat) {
                        $temp = $koordinat[0];
                        $koordinat[0] = $koordinat[1];
                        $koordinat[1] = $temp;
                    }
                    $geoJSONString = json_encode($geoJSON);
                    // Tambahkan data yang diproses ke dalam array $allData
                    $allData[] = json_encode($geoJSON);
                }
                // dd( $allData);
            }
        } else {
            // Handle jika 'features' tidak ditemukan atau bukan array
            return response()->json(['error' => 'Struktur JSON tidak sesuai'], 400);
        }
        return view('dashboard.map', [
            'dataJSONppolygon' => $allData
        ]);
    }
}
