@extends('templates/head')
    @section('titre')
    Ingredients
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
                    Liste des Ingredients
                    <hr>
                <table class="table table-striped table-bordered">
                    <tr>
                            
                        <th>idingredient</th>
                        <th>nom_ingredients</th>
                        <th>stock</th>
                

                         
                    <tr>
                        @foreach($Ing as $monIngredient)
                        <td>{{$monIngredient->idingredient}}</td>
                        <td>{{$monIngredient->nom_ingredient }}</td>
                        <td>{{$monIngredient->stock }}</td>
                    </tr>    
                    @endforeach
                </table>
                </div>

                
                    <!--<button type="button" class="btn btn-success">Ajouter</button> en HTML simple-->
                <!-- ne pas mettre dans Div Class Btn sinon ne fonctionne pas-->
                    

                <a class="btn btn-success" href={{url('/BoissonsFormulaire/create')}}>Ajouter</a>
                <a class="btn btn-primary" href={{url('/BoissonsFormulaire/create')}}>Modifier</a>
                <a class="btn btn-danger" href={{url('/BoissonsFormulaire/create')}}>Supprimer</a>
                    <br><br>
                

                @include ('templates/menu')
            </div>
        </div>
    </body>
</html>
