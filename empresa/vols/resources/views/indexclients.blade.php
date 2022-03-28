@extends('disseny')

@section('content')

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
        </tr>
    </thead>
    <tbody>
        @foreach($client as $cli)
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
            <td class="text-left">
                <a href="{{ route('clients.edit', $cli->passaport_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->passaport_client)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a>
@endsection