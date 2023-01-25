{{-- <div class="row border shadow p-2 rounded-4">
    <h3>Realizar búsqueda</h3>
    <div class="col-12 col-lg-8">
        <label for="search-text" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="search-text" role="search" placeholder="Nombre del producto...">
    </div>
    <div class="col-12 col-lg-4">
        <label for="search-category" class="form-label">Categoría</label>
        <select id="search-category" name="search-category" class="form-select">
            <option selected value="0">---</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} - {{ $category->code }}</option>
            @endforeach
          </select>
    </div>
</div> --}}

<div class="accordion" id="accordion-form">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#search-form" aria-expanded="true" aria-controls="search-form">
          Realizar búsqueda <i class="bi bi-search"></i>
        </button>
      </h2>
      <div id="search-form" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#aaccordion-form">
        <div class="accordion-body">
            <div class="row">
            <div class="col-12 col-lg-6">
                <label for="search-text" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="search-text" role="search" placeholder="Nombre del producto...">
            </div>
            <div class="col-12 col-lg-6">
                <label for="search-category" class="form-label">Categoría</label>
                <select id="search-category" name="search-category" class="form-select">
                    <option selected value="0">---</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }} - {{ $category->code }}</option>
                    @endforeach
                  </select>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>