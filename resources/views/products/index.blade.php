@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.index') }}
@endsection

@section('content')

<h1>Productos</h1>
<div class="row border shadow p-2 rounded-4">
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
                <option value="{{ $category->id }}" {{ selectValue('category_id', $category->id, $product ?? null) }}>{{ $category->name }} - {{ $category->code }}</option>
            @endforeach
          </select>
    </div>
</div>
<ul id="product-list" class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-3 g-lg-4 list-unstyled justify-content-around m-auto">
    @foreach ($products as $product)
        @include('products.include.product-card', ['product' => $product])
    @endforeach
</ul>

@endsection

@push('scripts')
<script src="{{ mix('/js/products.js') }}" ></script>
@endpush