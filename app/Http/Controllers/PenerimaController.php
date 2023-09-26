<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\DaerahIrigasi;
use App\Models\Districts;
use App\Models\Penerima;
use App\Models\Province;
use App\Models\Subdistricts;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerimas = Penerima::latest()
            ->with('daerahIrigasi')
            ->filter(request()->only('search'))
            ->orderBy('created_at', 'desc')
            ->get();
        return view('form.daftar_p3tgai.index', [
            "penerimas" => $penerimas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $a = Province::get();
        $b = Cities::all();
        $c = Districts::all();
        $d = Subdistricts::all();
        // dd($a,$b,$c,$d);
        return view('form.daftar_p3tgai.create', [
            'DaerahIrigasi' => DaerahIrigasi::all(),
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'daerah_irigasi_id' => ['required'],
            'Kabupaten' => ['required'],
            'Desa' => ['required'],
            'xAx' => ['required'],
            'yAx' => ['required'],
            'Kecamatan' => ['required'],
            'IrigasiDesaTerbangun' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'IrigasiDesaBelumTerbangun' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'PolaTanamSaatIni' => ['nullable'],
            'JenisVegetasi' => ['nullable'],
            'MendapatkanP4_ISDA' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'TahunMendapatkan' => ['nullable'],
            'names' => ['required'], // Mengganti 'names.*' menjadi 'names'
            'peta_pdf' => ['file', 'max:1024', 'mimes:pdf'],
            'jaringan_pdf' => ['file', 'max:1024', 'mimes:pdf'],
            'dokumentasi_pdf' => ['file', 'max:1024', 'mimes:pdf'],
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
        // $validatedData['names'] = json_encode($validatedData['names']);

        try {
            Penerima::create($validatedData);
            return redirect('/dashboard/daerah-irigasi')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
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
    public function edit(string $id)
    {
        $penerima = Penerima::findOrFail($id);
        // dd($penerima);
        return view('form.daftar_p3tgai.edit', [
            "Penerimas" => $penerima,
            "DaerahIrigasi" => DaerahIrigasi::get()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'daerah_irigasi_id' => ['required'],
            'Kabupaten' => ['required'],
            'Desa' => ['required'],
            'Kecamatan' => ['required'],
            'IrigasiDesaTerbangun' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'IrigasiDesaBelumTerbangun' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'PolaTanamSaatIni' => ['nullable'],
            'JenisVegetasi' => ['nullable'],
            'MendapatkanP4_ISDA' => ['nullable', 'regex:/^[0-9]+(\.[0-9]+)?$/'],
            'TahunMendapatkan' => ['nullable'],
            'names' => ['required'], // Mengganti 'names.*' menjadi 'names'
            'peta_pdf' => ['file', 'max:1024', 'mimes:pdf'],
            'jaringan_pdf' => ['file', 'max:1024', 'mimes:pdf'],
            'dokumentasi_pdf' => ['file', 'max:1024', 'mimes:pdf'],
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

        try {
            Penerima::where('id', $id)->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect('/dashboard/daerah-irigasi')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("ini delete");
        $penerima = Penerima::findOrFail($id);
        try {
            $penerima->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }
    public function getDataDariDatabase()
    {
        $dataDariDatabase = Penerima::all(); // Mengambil data dari model

        return view(
            'form.daftar_p3tgai.index',
            [
                'dataDariDatabase' => $dataDariDatabase
            ]
        );
    }
}
