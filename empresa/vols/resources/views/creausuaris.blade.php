@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou usuari
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
    <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom_cognoms">Nom i cognoms</label>
                <input type="text" class="form-control" name="nom_cognoms"/>
            </div>
            <div>
              <label for="email_usuari">Email</label>
              <input type="text" class="form-control" name="email_usuari"/>
            </div>
            <div>
              <label for="password">Contrasenya</label>
              <input type="password" class="form-control" name="password"/>
            </div>
            <div>
              <label for="tipus">Tipus</label>
              <select class="form-control" name="tipus">
                <option value="treballador">Treballador</option>
                <option value="cap_departament">Cap de departament</option>
            </select>
            </div>
            <div>
              <label for="darrere_hora_entrada">Darrera hora d'entrada</label>
              <input type="time" class="form-control" name="darrere_hora_entrada"/>
            </div>
            <div>
              <label for="darrere_hora_sortida">Darrera hora de sortida</label>
              <input type="time" class="form-control" name="darrere_hora_sortida"/>
            </div>
            <button type="submit" class="btn btn-primary">Envia</button>
          <a href="{{ route('usuaris.index') }}" class="btn btn-warning" style="margin-left: 10px;">Torna a la llista</a>
      </form>
  </div>
</div>
<br>
@endsection