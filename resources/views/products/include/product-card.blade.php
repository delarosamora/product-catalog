<li class="col product-card" data-name="{{ $product->name }}" data-category="{{ $product->category_id }}">
    <div class="card m-auto border border-3 shadow-lg h-100 rounded-5 overflow-hidden">
        <img src="/storage/products/{{ $product->safe_image }}" class="card-img-top object-fit-cover" alt="..." style="height: 20vh">
        <div class="card-body text-center">
          <a href="{{ route('products.show', ['product' => $product]) }}" class="stretched-link">
            <h5 class="card-title text-truncate">{{ Str::upper($product->name) }}</h5>     
          </a>
          <p class="text-start"><span class="badge text-bg-primary">{{ $product->code_tag }}</span></p>
          <h6 class="text-start card-subtitle mb-2 text-muted">{{ $product->category->name }}</h6>
          <p class="text-start card-text fs-4"><strong>{{ $product->price }} €</strong></p>
        </div>
      </div>
</li>