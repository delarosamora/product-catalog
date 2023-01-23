@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="p-4 border border-2 shadow rounded-4" method="POST" action="{{ route('do-login') }}">
    @csrf
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label"><i class="bi bi-envelope-at-fill"></i> Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label"><i class="bi bi-key-fill"></i> Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="mb-3 row col-12 col-md-8 col-lg-5 m-auto">
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
      </div>
</form>