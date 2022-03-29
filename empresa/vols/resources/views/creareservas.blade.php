@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix una nova reserva
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
    <form method="post" action="{{ route('reservas.store') }}">
          <div class="form-group">
              @csrf
              <label for="passaport_client">Passaport del client</label>
                <input type="text" class="form-control" name="passaport_client" />
                <a href="{{ route('clients.index') }}">comprovar passaports</a>
            </div>
            <div class="form-group">
                <label for="codi_unic_vol">Codi únic del vol</label>
                <input type="text" class="form-control" name="codi_unic_vol" />
                <a href="{{ route('vols.index') }}">comprovar números de vol</a>
            </div>
            <div class="form-group">
                <label for="localitzador">Localitzador</label>
                <input type="text" class="form-control" name="localitzador" />
            </div>
            <div class="form-group">
                <label for="numero_seient">Número de seient</label>
                <input type="text" class="form-control" name="numero_seient" />
            </div>
            <div>
                <label for="equipatge_ma">1 Equipatge de mà</label>
                <select class="form-control" name="equipatge_ma">
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>
            <div>
                <label for="equipatge_cabina">1 Equipatge de cabina fins a 20Kg</label>
                <select class="form-control" name="equipatge_cabina">
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantitat_equipatges_20">Quantitat d'equipatges facturats de més de 20Kg</label>
                <input type="text" class="form-control" name="quantitat_equipatges_20" />
            </div>
            <div class="form-group">
                <label for="tipus_asseguranca">Tipus d'asseguranca</label>
                <select class="form-control" name="tipus_asseguranca">
                    <option value="fins_1000_euros">Fins a 1000 euros</option>
                    <option value="fins_500_euros">Fins a 500 euros</option>
                    <option value="sense_franquicia">Sense franquicia</option> 
                </select>
            </div>
            <div class="form-group">
                <label for="preu_vol">Preu del vol</label>
                <input type="text" class="form-control" name="preu_vol" />
            </div>
            <div class="form-group">
                <label for="tipus_checking">Tipus de checking</label>
                <select class="form-control" name="tipus_checking">
                    <option value="online">Online</option>
                    <option value="mostrador">Mostrador</option>
                    <option value="quiosc">Quiosc</option> 
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Envia</button>
          <a href="{{ route('reservas.index') }}" class="btn btn-warning" style="margin-left: 10px;">Torna a la llista</a>
      </form>
  </div>
</div>
<br>
@endsection