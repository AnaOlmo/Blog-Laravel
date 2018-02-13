@extends('templates/head')   
@section('titre')
Details
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
              Details
              <hr>


              <table class="table table-striped table-bordered">

                <tr>


                    <th>nom_Ingredient</th>
                    <th>Stock</th>

                </tr> 
                <tr>
                    <td>{{$Ingredients->nom}}</td>
                    <td>{{$Ingredients->stock}}</td>
                </tr>
            </table>


        </div>

        <a class="btn btn-primary" href={{url('Ingredients/ModifierIngredient/updateIngredient/'.$Ingredients->id)}}>Modifier</a>
        <a class="btn btn-danger" href={{url('Ingredients/DeleteIngredients/destroy/'.$Ingredients->id)}}>Supprimer</a>

        @include ('templates/menu')
    </div>
</div>
</body>
</html>


