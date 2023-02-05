<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ seo()->render() }}

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('/css/fonts.css') }}">
    </head>
    <body class="d-flex flex-column min-vh-100 bg-warning">
        @include('menu.menu')
        <div class="container py-2 flex-grow-1 bg-white shadow-lg">
            <header class="p-3">
                @yield('breadcrumbs')
            </header>
            <main>
                @yield('content')
            </main>
            @if(session('notification'))
                <div id="status-notification" data-status="{{ session('notification.status') }}" data-title="{{ session('notification.title') }}" data-text="{{ session('notification.text') }}"></div>
            @endif
        </div>
        @push('scripts')
        <script src="{{ mix('/js/notify.js') }}"></script>
        @endpush
        @stack('scripts')

        @include('footer.footer')

    </body>
</html>
