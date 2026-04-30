<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        @include('partials.head')

        <link rel="stylesheet" href="{{ asset('hardsettings/estilo.css') }}">
    </head>

<body>
    <div class="page-wrapper">
        @include('partials.preloader')

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @include('partials.script')

    @stack('plugins')

    <script src="{{ asset('davilla/js/script.js') }}"></script>

    @stack('scripts')
</body>