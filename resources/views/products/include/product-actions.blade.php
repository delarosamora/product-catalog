<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2" role="group">
      <a role="button" class="btn btn-primary" href="{{ route('products.edit', ['product' => $product]) }}"><i class="bi bi-pencil-fill"></i> Editar</a>
    </div>
    <div class="btn-group me-2" role="group">
      @include('products.include.product-delete-modal', ['product' => $product])
    </div>
  </div>