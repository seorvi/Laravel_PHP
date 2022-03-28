<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ControladorReserva extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva = Reserva::all();
        return view('indexreservas', compact('reserva'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creareservas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novaReserva = $request->validate([
            'passaport_client_reserva' => 'required|string',
            'codi_unic_vol_reserva' => 'required|string',
            'localitzador' => 'required|string',
            'numero_seient' => 'required|string',
            'equipatge_ma' => 'required|string',
            'equipatge_cabina' => 'required|string',
            'quantitat_equipatges_20' => 'required|string',
            'tipus_asseguranca' => 'required|string',
            'preu_vol' => 'required|string',
            'tipus_checking' => 'required|string',
        ]);

        $reserva = Reserva::create($novaReserva);

        return redirect('/reservas')->with('completed', 'Reserva creada correctament');
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
        $reserva = Reserva::find($id);
        return view('actualitza', compact('reservas'));
        //crear blade que se llame editareservas
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
            'passaport_client_reserva' => 'required|string',
            'codi_unic_vol_reserva' => 'required|string',
            'localitzador' => 'required|string',
            'numero_seient' => 'required|string',
            'equipatge_ma' => 'required|string',
            'equipatge_cabina' => 'required|string',
            'quantitat_equipatges_20' => 'required|string',
            'tipus_asseguranca' => 'required|string',
            'preu_vol' => 'required|string',
            'tipus_checking' => 'required|string',
        ]);

        Reserva::where($id)->update($dades);
        return redirect ('/reservas')->with('completed', 'Reserva actualitzada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        return redirect('/reservas')->with('completed', 'Reserva eliminada correctament');
    }
}
