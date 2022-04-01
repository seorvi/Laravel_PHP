@extends('disseny')

@section('content')
<?php

use App\Models\Vol;

$voll = Vol::where('codi_unic_vol', $codi_unic_vol)->first();
$dades = unserialize ($voll->dades_vol);



?>


<h1>Llista de vols</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Codi unic de vol</td>
          <td>Model d'avio</td>
          <td>Ciutat d'origen</td>
          <td>Ciutat de desti</td>
          <td>Terminal d'origen</td>
          <td>Terminal de desti</td>
          <td>Data de sortida</td>
          <td>Data d'arribada</td>
          <td>Hora de sortida</td>
          <td>Hora d'arribada</td>
          <td>Classe</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$voll->codi_unic_vol}}</td>
            <td>{{$voll->model_avio}}</td>
            <td>{{$voll->ciutat_origen}}</td>
            <td>{{$voll->ciutat_desti}}</td>
            <td>{{$voll->terminal_origen}}</td>
            <td>{{$voll->terminal_desti}}</td>
            <td>{{$voll->data_sortida}}</td>
            <td>{{$voll->data_arribada}}</td>
            <td>{{$voll->hora_sortida}}</td>
            <td>{{$voll->hora_arribada}}</td>
            <td>{{$voll->Classe}}</td>
        </tr>
    </tbody>
  </table>
<div>
@endsection