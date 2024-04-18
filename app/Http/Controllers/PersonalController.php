<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personal = Personal::all();
        return view ('Personal.index')->with('Personal',$personal);



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('Personal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $personal = new Personal();
        $personal->nombre=$request->get('nombre');
        $personal->apellido=$request->get('apellido');
        $personal->edad=$request->get('edad');
        $personal->Email=$request->get('Email');
        $personal->Telefono=$request->get('Telefono');

        $personal->save();
        

         return redirect ('Personal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Personal::find($id);


        return view('Personal.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $editarRegistro=Personal::find($id);
        
        $editarRegistro->nombre=$request->get('nombre'); 
        $editarRegistro->apellido=$request->get('apellido');  
        $editarRegistro->edad=$request->get('edad');    
        $editarRegistro->Email=$request->get('Email');
        $editarRegistro->Telefono=$request->get('Telefono');
        $editarRegistro->Save();

        return redirect('Personal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
