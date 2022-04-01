<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use PDF;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Clients::all();
        return view('indexclients', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creaclients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'passaport_client' => 'required|string|max:9',
            'nom_client' => 'required|string',
            'edat_client' => 'required|integer',
            'telefon_client' => 'required|integer',
            'adreca_client' => 'required|string',
            'ciutat_client' => 'required|string',
            'pais_client' => 'required|string',
            'email_client' => 'required|email',
            'tipus_targeta' => 'required|string',
            'numero_targeta' => 'required|integer',
        ]);
        $client = Clients::create($nouClient);

        return redirect('/clients')->with('completed', 'Client creat correctament');
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
    public function edit($passaport_client)
    {
        $client = Clients::findOrFail($passaport_client);
        return view('actualitzaclients', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $passaport_client)
    {
        $dades = $request->validate([
            'passaport_client' => 'required|string|max:9',
            'nom_client' => 'required|string',
            'edat_client' => 'required|integer',
            'telefon_client' => 'required|integer',
            'adreca_client' => 'required|string',
            'ciutat_client' => 'required|string',
            'pais_client' => 'required|string',
            'email_client' => 'required|email',
            'tipus_targeta' => 'required|string',
            'numero_targeta' => 'required|integer',
        ]);

        Clients::wherepassaport_client($passaport_client)->update($dades);
        return redirect('/clients')->with('completed', 'Client actualitzat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($passaport_client)
    {
        $client = Clients::findOrFail($passaport_client);
        $client->delete();
        return redirect('/clients')->with('completed', 'Client eliminat correctament');
    }
}
