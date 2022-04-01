@extends('disseny')

@section('content')
<?php

use App\Models\Usuaris;

$usu = Usuaris::where('email_usuari', $email_usuari)->first();
$dades = unserialize ($usu->dades_usuari);



?>

<h1>Llista d'usuaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Nom</td>
            <td>Email</td>
            <td>Contrasenya</td>
            <td>Tipus</td>
            <td>Darrera hora d'entrada</td>
            <td>Darrera hora de sortida</td>
            <td colspan="3">Accions</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$usu->nom_cognoms}}</td>
            <td>{{$usu->email_usuari}}</td>
            <td>{{$usu->password}}</td>
            <td>{{$usu->tipus}}</td>
            <td>{{$usu->darrere_hora_entrada}}</td>
            <td>{{$usu->darrere_hora_sortida}}</td>
        </tr>
    </tbody>
  </table>
<div>
@endsection