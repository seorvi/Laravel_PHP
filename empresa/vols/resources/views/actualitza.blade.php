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
        <form method="post" action="{{ route('vols.update', $voll->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="codivol">Codi unic de vol</label>
                <input type="text" class="form-control" name="codivol" value="{{$voll->codi_unic_vol}}" />
            </div>
            <div>
                <label for="modelavio">Model d'avio</label>
                <input type="text" class="form-control" name="modelavio" value="{{$voll->model_avio}}" />
            </div>
            <div>
                <label for="ciutadorigen">Ciutat d'origen</label>
                <input type="text" class="form-control" name="ciutadorigen" value="{{$voll->ciutat_origen}}" />
            </div>
            <div>
                <label for="ciutadesti">Ciutat de desti</label>
                <input type="text" class="form-control" name="ciutadesti" value="{{$voll->ciutat_desti}}" />
            </div>
            <div>
                <label for="terminalorigen">Terminal d'origen</label>
                <input type="text" class="form-control" name="terminalorigen" value="{{$voll->terminal_origen}}" />
            </div>
            <div>
                <label for="terminaldesti">Terminal de desti</label>
                <input type="text" class="form-control" name="terminaldesti" value="{{$voll->terminal_desti}}" />
            </div>
            <div>
                <label for="datasortida">Data de sortida</label>
                <input type="date" class="form-control" name="datasortida" value="{{$voll->data_sortida}}" />
            </div>
            <div>
                <label for="dataarribada">Data d'arribada</label>
                <input type="date" class="form-control" name="dataarribada" value="{{$voll->data_arribada}}" />
            </div>
            <div>
                <label for="horasortida">Hora de sortida</label>
                <input type="time" class="form-control" name="horasortida" value="{{$voll->hora_sortida}}" />
            </div>
            <div>
                <label for="horarribada">Hora d'arribada</label>
                <input type="time" class="form-control" name="horarribada" value="{{$voll->hora_arribada}}" />
            </div>
            <div>
                <label for="classe">Classe</label>
                <input type="text" class="form-control" name="classe" value="{{$voll->classe}}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('vols') }}">Accés directe a la Llista de vols</a
@endsection