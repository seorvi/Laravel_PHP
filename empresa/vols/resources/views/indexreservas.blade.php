@extends('disseny')

@section('content')

<h1>Llista de reserves</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Passaport del client<td>
            <td>Codi únic del vol</td>
            <td>Localitzador</td>
            <td>Número de seient</td>
            <td>1 Equipatge ma</td>
            <td>1 Equipatge de cabina fins a 20Kg</td>
            <td>Quantitat equipatges facturats de més de 20kg</td>
            <td>Tipus d'assegurançaa</td>
            <td>Preu del vol</td>
            <td>Tipus de checking</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reserva as $rese)
        <tr>
            <td>{{$rese->passaport_client_reserva}}</td>
            <td>{{$rese->codi_unic_vol_reserva}}</td>
            <td>{{$rese->localitzador}}</td>
            <td>{{$rese->numero_seient}}</td>
            <td>{{$rese->equipatge_ma}}</td>
            <td>{{$rese->equipatge_cabina}}</td>
            <td>{{$rese->quantitat_equipatges_20}}</td>
            <td>{{$rese->tipus_asseguranca}}</td>
            <td>{{$rese->preu_vol}}</td>
            <td>{{$rese->tipus_checking}}</td>
            <td class="text-left">
                <a href="{{ route('reservas.edit', $rese->passaport_client_reserva)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('reservas.destroy', $rese->passaport_client_reserva)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('reservas/create') }}">Accés directe a la vista de creació de reserves</a>
@endsection