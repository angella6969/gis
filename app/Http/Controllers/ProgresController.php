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
            'progress' => Progres::where('penerima_id',$id)->get(),
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
    public function store(Request $request, $id)
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
    public function show(string $id)
    {
        $progres = Progres::findOrFail($id);
        return response()->json([
            'progres' => $progres,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $progres = Progres::findOrfail($id);
        return view('form.perkembangan.edit', [
            "progres" => $progres,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $a = Progres::findOrfail($id);
        // dd($a);
        $validatedData = $request->validate([
            'TahunPengerjaan' => ['nullable'],
            'jenisPekerjaan' => ['nullable'],
            'langsirMaterial' => ['nullable'],
            'jarakLangsir' => ['nullable'],
            'bedaLangsir' => ['nullable'],
            'metodeLangsir' => ['nullable'],
            'KondisiLokasiPekerjaan' => ['nullable'],
            'KondisiTanahLokasiPekerjaan' => ['nullable'],
            'PotensiMasalahSosial' => ['nullable'],
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

        if ($validatedData['TahunPengerjaan'] == null) {
            $validatedData['TahunPengerjaan'] = $a->TahunPengerjaan;
        }
        if ($validatedData['jenisPekerjaan'] == null) {
            $validatedData['jenisPekerjaan'] = $a->jenisPekerjaan;
        }
        if ($validatedData['langsirMaterial'] == null) {
            $validatedData['langsirMaterial'] = $a->langsirMaterial;
        }
        if ($validatedData['jarakLangsir'] == null) {
            $validatedData['jarakLangsir'] = $a->jarakLangsir;
        }
        if ($validatedData['bedaLangsir'] == null) {
            $validatedData['bedaLangsir'] = $a->bedaLangsir;
        }
        if ($validatedData['metodeLangsir'] == null) {
            $validatedData['metodeLangsir'] = $a->metodeLangsir;
        }
        if ($validatedData['KondisiLokasiPekerjaan'] == null) {
            $validatedData['KondisiLokasiPekerjaan'] = $a->KondisiLokasiPekerjaan;
        }
        if ($validatedData['KondisiTanahLokasiPekerjaan'] == null) {
            $validatedData['KondisiTanahLokasiPekerjaan'] = $a->KondisiTanahLokasiPekerjaan;
        }
        if ($validatedData['PotensiMasalahSosial'] == null) {
            $validatedData['PotensiMasalahSosial'] = $a->PotensiMasalahSosial;
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

        // dd($a);
        try {
            Progres::where('id', $id)->update($validatedData);
            return redirect("/dashboard/update/perkembangan-daerah-irigasi/$a->penerima_id")->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("ini route delete");
        $Progres = Progres::findOrFail($id);
        try {
            $Progres->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
