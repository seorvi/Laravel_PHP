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
        <form method="post" action="{{ route('clients.update', $client->passaport_client) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="passaport_client">Passaport Client</label>
                <input type="text" class="form-control" name="passaport_client" value="{{ $client->passaport_client }}" />
            </div>
            <div class="form-group">
                <label for="nom_client">Nom Client</label>
                <input type="text" class="form-control" name="nom_client" value="{{ $client->nom_client }}" />
            </div>
            <div class="form-group">
                <label for="edat_client">Edat Client</label>
                <input type="text" class="form-control" name="edat_client" value="{{ $client->edat_client }}" />
            </div>
            <div class="form-group">
                <label for="telefon_client">Telèfon Client</label>
                <input type="text" class="form-control" name="telefon_client" value="{{ $client->telefon_client }}" />
            </div>
            <div class="form-group">
                <label for="adreca_client">Adreça Client</label>
                <input type="text" class="form-control" name="adreca_client" value="{{ $client->adreca_client }}" />
            </div>
            <div class="form-group">
                <label for="ciutat_client">Ciutat Client</label>
                <input type="text" class="form-control" name="ciutat_client" value="{{ $client->ciutat_client }}" />
            </div>
            <div class="form-group">
                <label for="pais_client">Pais Client</label>
                <input type="text" class="form-control" name="pais_client" value="{{ $client->pais_client }}" />
            </div>
            <div class="form-group">
                <label for="email_client">Email Client</label>
                <input type="email" class="form-control" name="email_client" value="{{ $client->email_client }}" />
            </div>
            <div class="form-group">
                <label for="tipus_targeta">Tipus de targeta</label>
                <select class ="form-control" name="tipus_targeta" value ="{{  $client->tipus_targeta }}">
                    <option value="debit">Debit</option>
                    <option value="credit">Credit</option>
                </select>
            </div>
                <label for="numero_targeta">Numero de targeta</label>
                <input type="text" class="form-control" name="numero_targeta" value="{{ $client->numero_targeta }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a
@endsection