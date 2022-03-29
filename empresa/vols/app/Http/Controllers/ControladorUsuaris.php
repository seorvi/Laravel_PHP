<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;

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
            'contrasenya_usuari' => 'required|string',
            'tipus' => 'required|string',
            'darrere_hora_entrada' => 'required|string',
            'darrere_hora_sortida' => 'required|string',
        ]);
        $usuari = Usuaris::create($nouUsuari);

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
    public function edit($id)
    {
        $usuari = Usuaris::find($id);
        return view('actualitza', compact('usuari'));
        //crear blade que se llame editausuaris
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dades = $request->validate([
            'nom_cognoms' => 'required|string',
            'email_usuari' => 'required|email',
            'contrasenya_usuari' => 'required|string',
            'tipus' => 'required|string',
            'darrere_hora_entrada' => 'required|string',
            'darrere_hora_sortida' => 'required|string',
        ]);

        Usuaris::where($id)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuari = Usuaris::findOrFail($id); 
        $usuari->delete();
        return redirect('/usuaris')->with('completed', 'Usuari eliminat correctament');
    }
}