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
        <form method="post" action="{{ route('reservas.update', $reservas->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="passaport_client_reserva">Passaport del client</label>
                <input type="text" class="form-control" name="passaport_client_reserva" value="{{ $reservas->passaport_client_reserva }}" />
            </div>
            <div class="form-group">
                <label for="codi_unic_vol_reserva">Codi únic del vol</label>
                <input type="text" class="form-control" name="codi_unic_vol_reserva" value="{{ $reservas->codi_unic_vol_reserva }}" />
            </div>
            <div class="form-group">
                <label for="localitzador">Localitzador</label>
                <input type="text" class="form-control" name="localitzador" value="{{ $reservas->localitzador }}" />
            </div>
            <div class="form-group">
                <label for="numero_seient">Número de seient</label>
                <input type="text" class="form-control" name="numero_seient" value="{{ $reservas->numero_seient }}" />
            </div>
            <div class="form-group">
                <label for="equipatge_ma">Equipatge mà</label>
                <input type="text" class="form-control" name="equipatge_ma" value="{{ $reservas->equipatge_ma }}" />
            </div>
            <div class="form-group">
                <label for="equipatge_cabina">Equipatge cabina</label>
                <input type="text" class="form-control" name="equipatge_cabina" value="{{ $reservas->equipatge_cabina }}" />
            </div>
            <div class="form-group">
                <label for="quantitat_equipatges_20">Quantitat d'equipatges facturats de més de 20kg</label>
                <input type="text" class="form-control" name="quantitat_equipatges_20" value="{{ $reservas->quantitat_equipatges_20 }}" />
            </div>
            <div class="form-group">
                <label for="tipus_asseguranca">Tipus d'assegurança</label>
                <input type="text" class="form-control" name="tipus_asseguranca" value="{{ $reservas->tipus_asseguranca }}" />
            </div>
            <div class="form-group">
                <label for="preu_vol">Preu del vol</label>
                <input type="text" class="form-control" name="preu_vol" value="{{ $reservas->preu_vol }}" />
            </div>
            <div class="form-group">
                <label for="tipus_checking">Tipus de checking</label>
                <input type="text" class="form-control" name="tipus_checking" value="{{ $reservas->tipus_checking }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('reservas') }}">Accés directe a la Llista de reserves</a
@endsection