<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;
use App\Models\Personal;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $telefonos = Telefono::all();
        return view ('Telefono.index')->with('telefonos',$telefonos);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //

        $idPersonal= $id;
        
        return view ('Telefono.create')->with('id', $idPersonal);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $telefono = new Telefono();
        
       $telefono->idpersonal = $request->get('idpersonal');
       $telefono->telefono=$request->get('Telefono');
        

        $telefono->save();
         return redirect ('/Personal');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $telefonos = Telefono::all();
        $idPersonal = $id;
        return view ('Telefono.index')->with('telefonos',$telefonos)->with('idPersonal', $idPersonal);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Telefono::find($id);


        return view('Telefono.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $editarRegistro=Telefono::find($id);

        $editarRegistro->idpersonal=$request->get('idpersonal');
        $editarRegistro->telefono=$request->get('Telefono');
        
        $editarRegistro->Save();

        return redirect('Personal');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro2 = Telefono::find($id);
        $eliminarRegistro2->delete();

        return redirect ('Personal');
    }
    public function eliminar(string $id)
    {
        $eliminarRegistro2 = Telefono::find($id);

        return view ('Telefono.eliminar')->with('eliminarRegistro2',$eliminarRegistro2);
}
}