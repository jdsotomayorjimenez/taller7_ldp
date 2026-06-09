<?php

namespace App\Http\Controllers;

use App\Models\Interes;
use Illuminate\Http\Request;

class InteresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intereses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' =>
            'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Interes::create($request->all());

        return redirect()->route('intereses.create')->with('success','Interés creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Interes $interes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interes $interes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interes $interes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interes $interes)
    {
        //
    }
}
