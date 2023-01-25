@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.index') }}
@endsection

@section('content')

<h1>Productos</h1>
@include('products.include.search-form')
<ul id="product-list" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 g-lg-4 list-unstyled justify-content-around m-auto">
    @foreach ($products as $product)
        @include('products.include.product-card', ['product' => $product])
    @endforeach
</ul>

@endsection

@push('scripts')
<script src="{{ mix('/js/products.js') }}" ></script>
@endpush