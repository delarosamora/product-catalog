@extends('main')

@section('breadcrumbs')
    {{ Breadcrumbs::render('products.index') }}
@endsection

@section('content')

<h1>Productos</h1>
<ul>
    @foreach ($products as $product)
        <li>
            <p>{{ $product->name }}</p>
            <a href="{{ route('products.show', ['product' => $product]) }}">Ver</a>
            <a href="{{ route('products.edit', ['product' => $product]) }}">Editar</a>
            <a href="{{ route('products.show', ['product' => $product]) }}">Eliminar</a>
        </li>
    @endforeach
</ul>

@endsection