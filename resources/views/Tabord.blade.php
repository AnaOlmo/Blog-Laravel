@extends('templates/head')
    @section('titre')
    Tableau de Bord
    @endsection
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Tableau de Bord
                </div>
                

                @include ('templates/menu')
            </div>
        </div>
    </body>
</html>

