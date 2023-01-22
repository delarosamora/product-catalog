@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.index') }}
@endsection

@section('content')

<h1>Productos</h1>
<ul class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-3 g-lg-4 list-unstyled justify-content-around m-auto">
    @foreach ($products as $product)
        @include('products.include.product-card', ['product' => $product])
    @endforeach
</ul>

@endsection