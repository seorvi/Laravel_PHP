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
        <form method="post" action="{{ route('vols.update', $vol->codi_unic_vol) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="codi_unic_vol">Codi unic de vol</label>
                <input type="text" class="form-control" name="codi_unic_vol" readonly value="{{$vol->codi_unic_vol}}" />
            </div>
            <div>
                <label for="model_avio">Model d'avio</label>
                <input type="text" class="form-control" name="model_avio" value="{{$vol->model_avio}}" />
            </div>
            <div>
                <label for="ciutat_origen">Ciutat d'origen</label>
                <input type="text" class="form-control" name="ciutat_origen" value="{{$vol->ciutat_origen}}" />
            </div>
            <div>
                <label for="ciutat_desti">Ciutat de desti</label>
                <input type="text" class="form-control" name="ciutat_desti" value="{{$vol->ciutat_desti}}" />
            </div>
            <div>
                <label for="terminal_origen">Terminal d'origen</label>
                <input type="text" class="form-control" name="terminal_origen" value="{{$vol->terminal_origen}}" />
            </div>
            <div>
                <label for="terminal_desti">Terminal de desti</label>
                <input type="text" class="form-control" name="terminal_desti" value="{{$vol->terminal_desti}}" />
            </div>
            <div>
                <label for="data_sortida">Data de sortida</label>
                <input type="date" class="form-control" name="data_sortida" value="{{$vol->data_sortida}}" />
            </div>
            <div>
                <label for="data_arribada">Data d'arribada</label>
                <input type="date" class="form-control" name="data_arribada" value="{{$vol->data_arribada}}" />
            </div>
            <div>
                <label for="hora_sortida">Hora de sortida</label>
                <input type="time" class="form-control" name="hora_sortida" value="{{$vol->hora_sortida}}" />
            </div>
            <div>
                <label for="hora_arribada">Hora d'arribada</label>
                <input type="time" class="form-control" name="hora_arribada" value="{{$vol->hora_arribada}}" />
            </div>
            <div>
                <label for="Classe">Classe</label>
                <select class="form-control" name="Classe" value="{{$vol->Classe}}">
                    <option value="Turista">Turista</option>
                    <option value="Business">Business</option>
                    <option value="Primera">Primera</option>
              </select>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('vols') }}">Accés directe a la Llista de vols</a
@endsection