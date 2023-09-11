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
        $penerimas = Penerima::latest()
            ->filter(request(['search']))
            ->orderBy('created_at', 'desc') // Menambahkan orderBy untuk mensortir data
            ->get();
        return view('form.daftar_p3tgai.index', [
            "penerimas" => $penerimas
        ]);
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
        $validatedData = $request->validate([
            'DaerahIrigasi' => ['required','unique:penerimas'],
            'Kabupaten' => ['required'],
            'Desa' => ['required'],
            'Kecamatan' => ['required'],
            'IrigasiDesaTerbangun' => ['required'],
            'IrigasiDesaBelumTerbangun' => ['required'],
            'PolaTanamSaatIni' => ['required'],
            'JenisVegetasi' => ['required'],
            'MendapatkanP4_ISDA' => ['required'],
            'TahunMendapatkan' => ['required'],
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
    public function edit(string $id)
    {
        $penerima = Penerima::findOrFail($id);

        return view('form.daftar_p3tgai.edit', [
            "Penerimas" => $penerima
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {
        dd("ini update");
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
            return back()->with('error', $e->getMessage());
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
