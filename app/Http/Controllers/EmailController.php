<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $emails = Email::all();
        return view ('Email.index')->with('emails',$emails);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $idPersonal= $id;
        return view ('Email.create')->with('id', $idPersonal);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        //
        $email = new Email();
           $email->idpersonal = $request->get('idpersonal');
           $email->email=$request->get('Email');
            $email->save();
          return redirect ('/Personal');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $emails = Email::all();
        $idPersonal = $id;
        return view ('Email.index')->with('emails',$emails)->with('idPersonal', $idPersonal);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Email::find($id);
        return view('Email.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Email::find($id);
        $editarRegistro->idpersonal=$request->get('idpersonal');
        $editarRegistro->email=$request->get('Email');
        $editarRegistro->Save();
        return redirect('Personal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro2 = Email::find($id);
        $eliminarRegistro2->delete();
        return redirect ('Personal');

    }

    public function eliminar(string $id)
    {
        $eliminarRegistro2 = Email::find($id);
        return view ('Email.eliminar')->with('eliminarRegistro2',$eliminarRegistro2);

    }
}
