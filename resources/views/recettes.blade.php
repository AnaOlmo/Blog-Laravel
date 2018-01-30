@extends('templates/head')
    @section('titre')
    Recettes
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
                    Recettes
                    <hr>
                
                <table class="table table-striped table-bordered">

                    <tr>
                            
                        <th>code_boisson</th>
                        <th>idingredient</th>
                        <th>quantite</th>
                         
                    <tr>
                         @foreach($Recipe as $maRecette)
                        <td>{{$maRecette->code_boisson}}</td>
                        <td>{{$maRecette->idingredient}}</td>
                        <td>{{$maRecette->quantite}}</td>
                    </tr>    
                    @endforeach
                </table>    
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
