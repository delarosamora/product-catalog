@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="p-4 border border-2 shadow rounded-4" method="POST" action="{{ route('do-changePassword') }}">
    @csrf
      <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label"><i class="bi bi-key-fill"></i> Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="password_repeat" class="col-sm-2 col-form-label"><i class="bi bi-key-fill"></i> Repetir Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password_repeat" name="password_repeat">
        </div>
      </div>
      <div class="mb-3 row col-12 col-md-8 col-lg-5 m-auto">
        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
      </div>
</form>