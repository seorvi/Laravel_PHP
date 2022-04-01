<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;
use PDF;
use Illuminate\Support\Facades\Hash;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuari = Usuaris::all();
        return view('indexusuaris', compact('usuari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creausuaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'nom_cognoms' => 'required|string',
            'email_usuari' => 'required|email',
            'password' => 'required|string',
            'tipus' => 'required|string',
            'darrere_hora_entrada' => 'required|string',
            'darrere_hora_sortida' => 'required|string',
        ]);
        Usuaris::create([
            'nom_cognoms' => $nouUsuari['nom_cognoms'],
            'email_usuari' => $nouUsuari['email_usuari'],
            'password' => Hash::make($nouUsuari['password']),
            'tipus' => $nouUsuari['tipus'],
            'darrere_hora_entrada' => $nouUsuari['darrere_hora_entrada'],
            'darrere_hora_sortida' => $nouUsuari['darrere_hora_sortida'],
        ]);

        return redirect('/usuaris')->with('completed', 'Usuari creat correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email_usuari)
    {
        $usuari = Usuaris::find($email_usuari);
        return view('actualitzausuaris', compact('usuari'));
        //crear blade que se llame editausuaris
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email_usuari)
    {
        $dades = $request->validate([
            'nom_cognoms' => 'required|string',
            'email_usuari' => 'required|email',
            'contrasenya_usuari' => 'required|string',
            'tipus' => 'required|string',
            'darrere_hora_entrada' => 'required|string',
            'darrere_hora_sortida' => 'required|string',
        ]);

        Usuaris::whereemail_usuari($email_usuari)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email_usuari)
    {
        $usuari = Usuaris::findOrFail($email_usuari); 
        $usuari->delete();
        return redirect('/usuaris')->with('completed', 'Usuari eliminat correctament');
    }

    public function generarPDF($id){
        $usuari = Usuaris::findOrFail($id);
        if($usuari){
            $email_usuari = $usuari->email_usuari;
            $pdf = PDF::loadView('pdfusuaris', compact('email_usuari'));
            //generar pdf A3
            return $pdf->setPaper('a3', 'landscape')->download('usuari.pdf');
        }
        $pdf = PDF::loadView('pdfusuaris', compact('usuari'));
        return $pdf->download('usuari.pdf');
    }
}
