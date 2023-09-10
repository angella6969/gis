<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.daftar_p3tgai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.daftar_p3tgai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'DaerahIrigasi' => ['required'],
            'Kabupaten' => ['required'],
            'Desa' => ['required'],
            'Kecamatan' => ['required'],
            'IrigasiDesaTerbangun' => ['required'],
            'IrigasiDesaBelumTerbangun' => ['required'],
            'PolaTanamSaatIni' => ['required'],
            'JenisVegetasi' => ['required'],
            'MendapatkanP4-ISDA' => ['required'],
            'TahunMendapatkan' => ['required'],
            'names' => ['required'], // Mengganti 'names.*' menjadi 'names'
            'peta_pdf' => ['required', 'file', 'max:1024', 'mimes:pdf'],
            'jaringan_pdf' => ['required', 'file', 'max:1024', 'mimes:pdf'],
            'dokumentasi_pdf' => ['required', 'file', 'max:1024', 'mimes:pdf'],
        ]);

        if ($request->hasFile('peta_pdf')) {
            $petaPdfPath = $request->file('peta_pdf')->store('public/pdf');
            $validatedData['peta_pdf'] = $petaPdfPath;
        }
        
        if ($request->hasFile('jaringan_pdf')) {
            $jaringanPdfPath = $request->file('jaringan_pdf')->store('public/pdf');
            $validatedData['jaringan_pdf'] = $jaringanPdfPath;
        }
        
        if ($request->hasFile('dokumentasi_pdf')) {
            $dokumentasiPdfPath = $request->file('dokumentasi_pdf')->store('public/pdf');
            $validatedData['dokumentasi_pdf'] = $dokumentasiPdfPath;
        }
        $validatedData['names'] = json_encode($validatedData['names']);

        try {
            Penerima::create($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect('/dashboard/daerah-irigasi')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerima $penerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerima $penerima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerima $penerima)
    {
        //
    }
}
