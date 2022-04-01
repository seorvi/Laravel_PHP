@extends('disseny')

@section('content')

<?php

use App\Models\Clients;

$cli = Clients::where('passaport_client', $passaport_client)->first();
$dades = unserialize ($cli->dades_client);

?>

<h1>Llista de clients</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Passaport</td>
            <td>Nom</td>
            <td>Edat</td>
            <td>Telèfon</td>
            <td>Adreça</td>
            <td>Ciutat</td>
            <td>Pais</td>
            <td>Email</td>
            <td>Tipus de targeta</td>
            <td>Numero de targeta</td>
            <td colspan="3">Accions</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$cli->passaport_client}}</td>
            <td>{{$cli->nom_client}}</td>
            <td>{{$cli->edat_client}}</td>
            <td>{{$cli->telefon_client}}</td>
            <td>{{$cli->adreca_client}}</td>
            <td>{{$cli->ciutat_client}}</td>
            <td>{{$cli->pais_client}}</td>
            <td>{{$cli->email_client}}</td>
            <td>{{$cli->tipus_targeta}}</td>
            <td>{{$cli->numero_targeta}}</td>
        </tr>
    </tbody>
  </table>
<div>
@endsection