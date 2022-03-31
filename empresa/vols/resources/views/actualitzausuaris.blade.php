@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('usuaris.update', $usuari->email_usuari) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nom_cognoms">Nom i Cognoms</label>
                <input type="text" class="form-control" name="nom_cognoms" value="{{ $usuari->nom_cognoms }}" />
            </div>
            <div class="form-group">
                <label for="email_usuari">Email</label>
                <input type="email" class="form-control" name="email_usuari" value="{{ $usuari->email_usuari }}" />
            </div>
            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input type="password" class="form-control" name="password" value="{{ $usuari->password }}" />
            </div>
            <div class="form-group">
                <label for="tipus">Tipus</label>
                <select class ="form-control" name="tipus" value ="{{  $usuari->tipus }}">
                    <option value="treballador">Treballador</option>
                    <option value="cap_departament">Cap de departament</option>
                <select>
            </div>
            <div class="form-group">
                <label for="darrere_hora_entrada">Darrere hora d'entrada</label>
                <input type="time" class="form-control" name="darrere_hora_entrada" value="{{ $usuari->darrere_hora_entrada }}" />
            </div>
            <div class="form-group">
                <label for="darrere_hora_sortida">Darrere hora de sortida</label>
                <input type="time" class="form-control" name="darrere_hora_sortida" value="{{ $usuari->darrere_hora_sortida }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection