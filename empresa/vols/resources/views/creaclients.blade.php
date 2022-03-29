@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou client
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
    <form method="post" action="{{ route('clients.store') }}">
          <div class="form-group">
              @csrf
              <label for="passaport_client">Passaport</label>
              <input type="text" class="form-control" name="passaport_client"/>
            </div>
            <div>
              <label for="nom_client">Nom</label>
              <input type="text" class="form-control" name="nom_client"/>
            </div>
            <div>
              <label for="edat_client">Edat</label>
              <input type="text" class="form-control" name="edat_client"/>
            </div>
            <div>
              <label for="telefon_client">Telèfon</label>
              <input type="text" class="form-control" name="telefon_client"/>
            </div>
            <div>
              <label for="adreca_client">Adreça</label>
              <input type="text" class="form-control" name="adreca_client"/>
            </div>
            <div>
              <label for="ciutat_client">Ciutat</label>
              <input type="text" class="form-control" name="ciutat_client"/>
            </div>
            <div>
              <label for="pais_client">Pais</label>
              <input type="text" class="form-control" name="pais_client"/>
            </div>
            <div>
              <label for="email_client">Email</label>
              <input type="email" class="form-control" name="email_client"/>
            </div>
            <div>
              <label for="tipus_targeta">Tipus de targeta</label>
              <select class="form-control" name="tipus_targeta">
                <option value="debit">debit</option>
                <option value="credit">credit</option>
            </select>
            </div>
            <div>
              <label for="numero_targeta">Número de targeta</label>
              <input type="text" class="form-control" name="numero_targeta"/>
            </div>
            <button type="submit" class="btn btn-primary">Envia</button>
          <a href="{{ route('clients.index') }}" class="btn btn-warning" style="margin-left: 10px;">Torna a la llista</a>
      </form>
  </div>
</div>
<br>
@endsection