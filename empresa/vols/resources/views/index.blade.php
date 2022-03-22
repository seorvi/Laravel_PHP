@extends('disseny')

@section('content')

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
        @foreach($vol as $voll)
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
            <td>{{$voll->classe}}</td>
            <td class="text-left">
                <a href="{{ route('vols.edit', $voll->codi_unic_vol)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('vols.destroy', $voll->codi_unic_vol)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('vols/create') }}">Accés directe a la vista de creació de vols</a>
@endsection