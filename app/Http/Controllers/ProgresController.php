<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Progres;
use Illuminate\Http\Request;

class ProgresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // dd('ini index progres',$id);
        // $a = Penerima::findOrFail($id);
        // dd($a);
        return view('form.perkembangan.index', [
            'penerimas' => Penerima::findOrFail($id),
            'progress' => Progres::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // dd('ini create progres',$id);

        $penerima = Penerima::findOrFail($id);
        $oldNames = $penerima->names ?? [];
        return view('form.perkembangan.create', [
            'id' => $id,
            'penerima' =>  $penerima,
            'oldNames' => $oldNames
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        // dd($id);
        $validatedData = $request->validate([
            'penerima_id' => ['required'],
            'TahunPengerjaan' => ['required'],
            'jenisPekerjaan' => ['required'],
            'langsirMaterial' => ['required'],
            'jarakLangsir' => ['required'],
            'bedaLangsir' => ['required'],
            'metodeLangsir' => ['required'],
            'KondisiLokasiPekerjaan' => ['required'],
            'KondisiTanahLokasiPekerjaan' => ['required'],
            'PotensiMasalahSosial' => ['required'],
            'TerlampirAktePendirian' => ['file', 'max:1024', 'mimes:pdf'],
            'TerlampirNPWP' => ['file', 'max:1024', 'mimes:pdf'],
            'TerlampirBukuRekening' => ['file', 'max:1024', 'mimes:pdf'],
        ]);

        if ($request->input('TahunPengerjaan') === 'lainnya') {
            $validatedData['TahunPengerjaan'] = $request->input('pilihanLainnyaTahunPengerjaan');
        }
        if ($request->input('metodeLangsir') === 'lainnya') {
            $validatedData['metodeLangsir'] = $request->input('pilihanLainnyaMetode');
        }
        if ($request->input('KondisiLokasiPekerjaan') === 'lainnya') {
            $validatedData['KondisiLokasiPekerjaan'] = $request->input('pilihanLainnyaKondisiLokasiPekerjaan');
        }
        if ($request->input('KondisiTanahLokasiPekerjaan') === 'lainnya') {
            $validatedData['KondisiTanahLokasiPekerjaan'] = $request->input('pilihanLainnyaKondisiTanahLokasiPekerjaan');
        }
        if ($request->input('PotensiMasalahSosial') === 'lainnya') {
            $validatedData['PotensiMasalahSosial'] = $request->input('pilihanLainnyaPotensiMasalahSosial');
        }
        if ($request->hasFile('TerlampirAktePendirian')) {
            $petaPdfPath = $request->file('TerlampirAktePendirian')->store('public/pdf');
            $validatedData['TerlampirAktePendirian'] = $petaPdfPath;
        }

        if ($request->hasFile('TerlampirNPWP')) {
            $jaringanPdfPath = $request->file('TerlampirNPWP')->store('public/pdf');
            $validatedData['TerlampirNPWP'] = $jaringanPdfPath;
        }

        if ($request->hasFile('TerlampirBukuRekening')) {
            $dokumentasiPdfPath = $request->file('TerlampirBukuRekening')->store('public/pdf');
            $validatedData['TerlampirBukuRekening'] = $dokumentasiPdfPath;
        }

        // dd($validatedData);
        try {
            Progres::create($validatedData);
            return redirect("/dashboard/update/perkembangan-daerah-irigasi/$id")->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Progres $progres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progres $progres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Progres $progres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progres $progres)
    {
        //
    }
}
