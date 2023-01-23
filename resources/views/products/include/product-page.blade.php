<div class="row row-cols-1 row-cols-lg-2">
  <div class="col p-4 text-center">
    <img class="img-fluid img-thumbnail w-75" style="max-height: 60vh; object-fit: contain" src="/storage/products/{{ $product->safe_image }}" />
  </div>
  <div class="col p-2">
    <h1 class="text-center">{{ $product->name }}</h1>
    <h3 class="text-center text-muted">{{ $product->category->name }}</h3>
    <h4 class="text-center">{{ $product->price }} €</h4>
    <h5 class="text-center"><span class="badge text-bg-primary">{{ $product->code_tag }}</span></h5>
    @isset($product->description)
      <p class="text-center">{{ $product->description }}</p>
    @endisset
  </div>
</div>