<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;

class ControladorVol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vol = Vol::all();
        return view('index', compact('vol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouVol = $request->validate([
            'codi_unic_vol' => 'required|string|max:6',
            'model_avio' => 'required|string',
            'ciutat_origen' => 'required|string',
            'ciutat_desti' => 'required|string',
            'terminal_origen' => 'required|string',
            'terminal_desti' => 'required|string',
            'data_sortida' => 'required|date',
            'data_arribada' => 'required|date',
            'hora_sortida' => 'required|date_format:H:i',
            'hora_arribada' => 'required|date_format:H:i',
            'Classe' => 'required|string',
        ]);
        $vol = Vol::create($nouVol);

        return redirect('/vols')->with('completed', 'Vol creat correctament');
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
        $vol = Vol::findOrFail($id);
        return view('actualitza', compact('vol'));
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
            'codi_unic_vol' => 'required|string|max:6',
            'model_avio' => 'required|string',
            'ciutat_origen' => 'required|string',
            'ciutat_desti' => 'required|string',
            'terminal_origen' => 'required|string',
            'terminal_desti' => 'required|string',
            'data_sortida' => 'required|date',
            'data_arribada' => 'required|date',
            'hora_sortida' => 'required|date_format:H:i',
            'hora_arribada' => 'required|date_format:H:i',
            'Classe' => 'required|string',
        ]);

        Vol::whereId($id)->update($dades);
        return redirect('/vols')->with('completed', 'Vol actualitzat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol = Vol::findOrFail($id);
        $vol->delete();
        return redirect('/vols')->with('completed', 'Vol eliminat correctament');
    }
}
