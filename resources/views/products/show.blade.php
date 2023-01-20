@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.show', $product) }}
@endsection

@section('content')

<h1>Ver producto</h1>
<ul>
    <li>{{ $product->name }}</li>
    <li>{{ $product->description }}</li>
</ul>

@endsection