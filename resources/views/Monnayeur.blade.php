@extends('templates/head')
    @section('titre')
    Monnayeur
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
                    Monnayeur
                    <hr>
                

                         @foreach($Coin as $mesMonnaies)
                    <tr>
                        <td>{{$mesMonnaies}}</td>
                    </tr>    
                    @endforeach
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-success">Ajouter</button>
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                    <br><br>
                </div>

                @include ('templates/menu')
            </div>
        </div>
    </body>
</html>


            
               