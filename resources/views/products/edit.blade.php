@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.edit', $product) }}
@endsection

@section('content')
<h1>Editar Producto</h1>
@include('products.form', ['product' => $product, 'action' => route('products.update', ['product' => $product]), 'method' => 'PUT'])

@endsection