<?php

namespace App\Http\Controllers;

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
        return view('form.perkembangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
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
