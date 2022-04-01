@extends('disseny')

@section('content')

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
        @foreach($usuari as $usu)
        <tr>
            <td>{{$usu->nom_cognoms}}</td>
            <td>{{$usu->email_usuari}}</td>
            <td>{{$usu->password}}</td>
            <td>{{$usu->tipus}}</td>
            <td>{{$usu->darrere_hora_entrada}}</td>
            <td>{{$usu->darrere_hora_sortida}}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usu->email_usuari)}}" class="btn btn-success btn-sm">Edita</a>
              </td>
              <td class="text-left">
                <form action="{{ route('usuaris.destroy', $usu->email_usuari)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
                </td>
                <td>
                    <button class="btn btn-primary btn-sm" type="submit">PDF</button>
                    </td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a>
<br><a href="{{ url('welcome') }}">Accés directe al menú</a>
@endsection