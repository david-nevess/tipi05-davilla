<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        @include('partials.head')
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
</body>