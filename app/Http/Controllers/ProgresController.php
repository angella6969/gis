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
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // dd($id);
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
    public function store(Request $request)
    {
        $id = $request->input('id');


        dd($id);
        dd('ini form update');
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
