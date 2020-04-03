<!DOCTYPE html>
<html>

<head>
    <!-- Licence Pro Servicetique -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5    PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    @yield('entete')
    <title> @yield('titre') </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <link rel='stylesheet' href='/css/mon_style.css'> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @include('navbar')
    <div class="container" style="margin-top: 65px">

        @if (Auth::check() && !Auth::user()->isActive)
            <div class="alert alert-warning" role="alert">
                {{Auth::user()->name}} : votre compte compte est pas encore activé par administration
            </div>
        @endif

        <div class="titre_contenu"> @yield('titre_contenu') </div>
        {{-- <div class="content"> @yield('content') </div> --}}
        <main class="py-4">
            @yield('content')
        </main>
        <div class="pied_page">@yield('pied_page')</div>
    </div>
</body>

</html>
