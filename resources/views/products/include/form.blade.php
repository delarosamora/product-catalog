@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{$action}}" method="POST" class="p-3 border border-2 shadow-lg" enctype="multipart/form-data">
    @if ($method == 'PUT')
        @method('PUT')
    @endif
    @csrf
    <div class="row g-3">
        <div class="col-12">
            <label for="name" class="form-label"><i class="bi bi-info-circle-fill"></i> Nombre del producto</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del producto" value="{{ inputValue('name', $product ?? null) }}">
        </div>
        <div class="col-12 col-lg-6">
            <label for="price" class="form-label"><i class="bi bi-cash-coin"></i> Precio</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="€" value="{{ inputValue('price', $product ?? null) }}">
        </div>
        <div class="col-12 col-lg-6">
            <label for="category_id" class="form-label"><i class="bi bi-tags-fill"></i> Categoría</label>
            <select id="category_id" name="category_id" class="form-select">
                <option selected value="">---</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ selectValue('category_id', $category->id, $product ?? null) }}>{{ $category->name }} - {{ $category->code }}</option>
                @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="description" class="form-label"><i class="bi bi-body-text"></i> Descripción</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">@isset($product) {{ $product->description }}@endisset</textarea>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row h-100 align-items-center justify-content-center">
                <div>
                    <label for="image" class="form-label"><i class="bi bi-image-fill"></i> Imagen</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-center">
            <img class="w-50 img-thumbnail" id="previewImg" @isset($product) src="/storage/products/{{ $product->image }}" @endisset>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
          </div>
    </div>
</form>
@push('scripts')
<script src="{{ mix('/js/form.js') }}" ></script>
@endpush
