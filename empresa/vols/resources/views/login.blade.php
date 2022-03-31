@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Login
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
      <form method="post" action= "/login">
      @csrf
          <div class="form-group">
              <label for="email_usuari">Usuari</label>
              <input type="text" class="form-control" name="email_usuari"/>
            </div>
            <div>
              <label for="password">Contrasenya</label>
              <input type="password" class="form-control" name="password"/>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Login</button>
        </form>
    </div>
</div>