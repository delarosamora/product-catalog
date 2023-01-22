<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-product-{{ $product->id }}">
    <i class="bi bi-trash-fill"></i> Eliminar
</button>

<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="delete-product-{{ $product->id }}" tabindex="-1" aria-labelledby="delete-product-{{ $product->id }}-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="delete-product-{{ $product->id }}-label">¿Eliminar producto?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>{{ $product->name }}</li>
            <li>{{ $product->price }} €</li>
          </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancelar</button>
            <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Sí, eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>