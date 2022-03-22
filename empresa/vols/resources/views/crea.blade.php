@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou vol
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
      <form method="post" action="{{ route('vols.store') }}">
          <div class="form-group">
              @csrf
              <label for="codi_unic_vol">Codi unic de vol</label>
              <input type="text" class="form-control" name="codi_unic_vol"/>
            </div>
            <div>
              <label for="model_avio">Model d'avio</label>
              <input type="text" class="form-control" name="model_avio"/>
            </div>
            <div>
              <label for="ciutat_origen">Ciutat d'origen</label>
              <input type="text" class="form-control" name="ciutat_origen"/>
            </div>
            <div>
              <label for="ciutat_desti">Ciutat de desti</label>
              <input type="text" class="form-control" name="ciutat_desti"/>
            </div>
            <div>
              <label for="terminal_origen">Terminal d'origen</label>
              <input type="text" class="form-control" name="terminal_origen"/>
            </div>
            <div>
              <label for="terminal_desti">Terminal de desti</label>
              <input type="text" class="form-control" name="terminal_desti"/>
            </div>
            <div>
              <label for="data_sortida">Data de sortida</label>
              <input type="date" class="form-control" name="data_sortida"/>
            </div>
            <div>
              <label for="data_arribada">Data d'arribada</label>
              <input type="date" class="form-control" name="data_arribada"/>
            </div>
            <div>
              <label for="hora_sortida">Hora de sortida</label>
              <input type="time" class="form-control" name="hora_sortida"/>
            </div>
            <div>
              <label for="hora_arribada">Hora d'arribada</label>
              <input type="time" class="form-control" name="hora_arribada"/>
            </div>
            <div>
              <label for="Classe">Classe</label>
              <select class="form-control" name="Classe">
                <option value="Turista">Turista</option>
                <option value="Bussiness">Bussiness</option>
                <option value="Primera">Primera</option>
              </select>
            </div>
          <button type="submit" class="btn btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('vols') }}">Accés directe a la Llista de vols</a>
@endsection