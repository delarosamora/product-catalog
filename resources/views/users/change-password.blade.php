@extends('main')

@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('login') }}
@endsection

<h1>{{ Auth::user()->name }} - Cambiar contraseña</h1>
<div class="row p-5">
    @include('users.include.change-password-form')
</div>

@endsection