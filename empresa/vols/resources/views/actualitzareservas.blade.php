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
        <form method="post" action="{{ route('reservas.update', $reserva->codi_unic_vol) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="passaport_client">Passaport del client</label>
                <input type="text" class="form-control" readonly name="passaport_client" value="{{ $reserva->passaport_client }}" />
            </div>
            <div class="form-group">
                <label for="codi_unic_vol">Codi únic del vol</label>
                <input type="text" class="form-control" readonly name="codi_unic_vol" value="{{ $reserva->codi_unic_vol }}" />
            </div>
            <div class="form-group">
                <label for="localitzador">Localitzador</label>
                <input type="text" class="form-control" name="localitzador" value="{{ $reserva->localitzador }}" />
            </div>
            <div class="form-group">
                <label for="numero_seient">Número de seient</label>
                <input type="text" class="form-control" name="numero_seient" value="{{ $reserva->numero_seient }}" />
            </div>
            <div class="form-group">
                <label for="equipatge_ma">Equipatge mà</label>
                <select class="form-control" name="equipatge_ma" value="{{ $reserva->equipatge_ma }}">
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>
            <div class="form-group">
                <label for="equipatge_cabina">Equipatge cabina</label>
                <select class="form-control" name="equipatge_cabina" value="{{ $reserva->equipatge_cabina }}">
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantitat_equipatges_20">Quantitat d'equipatges facturats de més de 20kg</label>
                <input type="text" class="form-control" name="quantitat_equipatges_20" value="{{ $reserva->quantitat_equipatges_20 }}" />
            </div>
            <div class="form-group">
                <label for="tipus_asseguranca">Tipus d'assegurança</label>
                <select class="form-control" name="tipus_asseguranca" value="{{ $reserva->tipus_asseguranca }}">
                    <option value="fins_1000_euros">Fins a 1000 euros</option>
                    <option value="fins_500_euros">Fins a 500 euros</option>
                    <option value="sense_franquicia">Sense franquicia</option> 
                </select>
            </div>
            <div class="form-group">
                <label for="preu_vol">Preu del vol</label>
                <input type="text" class="form-control" name="preu_vol" value="{{ $reserva->preu_vol }}" />
            </div>
            <div class="form-group">
                <label for="tipus_checking">Tipus de checking</label>
                <select class="form-control" name="tipus_checking" value="{{ $reserva->tipus_checking }}">
                    <option value="online">Online</option>
                    <option value="mostrador">Mostrador</option>
                    <option value="quiosc">Quiosc</option> 
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('reservas') }}">Accés directe a la Llista de reserves</a
@endsection