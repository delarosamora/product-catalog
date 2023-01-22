@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.show', $product) }}
@endsection

@section('content')

@include('products.include.product-actions', ['product' => $product])
@include('products.include.product-page', ['product' => $product])

@endsection