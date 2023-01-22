@extends('main')

@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('login') }}
@endsection

<h1>Iniciar sesión</h1>
<div class="row p-5">
    @include('users.include.login-form')
</div>

@endsection