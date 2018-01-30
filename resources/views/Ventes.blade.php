@extends('templates/head')
    @section('titre')
    Ventes
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
                    Ventes
                    <hr>
                
                    <table class="table table-striped table-bordered">

                    <tr>
                            
                        <th>id_boisson</th>
                        <th>numvente</th>
                        <th>date</th>
                        <th>nbsucre</th>
                         
                    <tr>
                         @foreach($Ventes as $maVente)
                    <tr>
                        <td>{{$maVente->id_boisson}}</td>
                        <td>{{$maVente->numvente}}</td>
                        <td>{{$maVente->date}}</td>
                        <td>{{$maVente->nbsucre}}</td>
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
