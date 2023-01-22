@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.create') }}
@endsection

@section('content')
<h1>Añadir Producto</h1>
@include('products.include.form', ['action' => route('products.store'), 'method' => 'POST'])

@endsection