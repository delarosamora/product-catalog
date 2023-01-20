@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.create') }}
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Añadir Producto</h1>
<form action="{{$action}}" method="POST">
    @if ($method == 'PUT')
        @method('PUT')
    @endif
    @csrf
    <div class="row g-3">
        <div class="col-12">
            <label for="name" class="form-label">Nombre del producto</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del producto" value="{{ inputValue('name', $product ?? null) }}">
        </div>
        <div class="col-12 col-lg-6">
            <label for="price" class="form-label">Precio</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="€" value="{{ inputValue('price', $product ?? null) }}">
        </div>
        <div class="col-12 col-lg-6">
            <label for="category_id" class="form-label">Categoría</label>
            <select id="category_id" name="category_id" class="form-select">
                <option selected value="">---</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ selectValue('category_id', $category->id, $product ?? null) }}>{{ $category->name }} - {{ $category->code }}</option>
                @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Descripción</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">{{ inputValue('name', $product ?? null) }}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
    </div>
</form>

@endsection