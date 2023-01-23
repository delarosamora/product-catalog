<li class="col product-card" data-name="{{ $product->name }}" data-category="{{ $product->category_id }}">
    <div class="card m-auto border border-3 shadow-lg h-100 rounded-5">
        <img src="/storage/products/{{ $product->safe_image }}" class="card-img-top" alt="..." style="height: 30vh; object-fit: cover">
        <div class="card-body text-center">
          <h5 class="text-start card-title">{{ $product->name }}</h5>
          <p class="text-start"><span class="badge text-bg-primary">{{ $product->code_tag }}</span></p>
          <h6 class="text-start card-subtitle mb-2 text-muted">{{ $product->category->name }}</h6>
          <p class="text-start card-text fs-4"><strong>{{ $product->price }} €</strong></p>
          <a href="{{ route('products.show', ['product' => $product]) }}" class="btn btn-primary stretched-link text-center w-75"><i class="bi bi-info-square-fill"></i> Info</a>
        </div>
      </div>
</li>