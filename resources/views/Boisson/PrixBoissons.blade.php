@extends('templates/head') <!-- extends car il peut y avoir des modification a l interieur -->
    @section('titre') <!-- section remplace le Yield du template head et se termine tjrs par endsection -->
        Prix Boissons
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
                   Prix Boissons
                    <hr>
                
                    <table class="table table-striped table-bordered">
                        
                        <tr> <!--tete tableau avant Foreach -->
                            
                        <th>code boisson</th>
                        <th>nom boisson</th>
                        <th>Prix</th>
                       
                        </tr> 
                           @foreach($Boisson as $maBoisson) <!-- parcours les tableaux. foreach ne fonctionne que pour les tableaux et les objets. passe en revue le tableau $Boisson. À chaque itération, la valeur de l'élément courant est assignée à $Boissons et le pointeur interne de tableau est avancé d'un élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant).--> 
                            <tr><td>{{$maBoisson->code_boisson}}</td><!-- code a executer -appel de variable, recuper ID-->
                            <td>{{$maBoisson->nom_boisson}}</td>
                            <td>{{$maBoisson->Prix}}</td>
                            
                        
                                     
                        @endforeach
                    </table>

                    
                </div>
                
                <a class="btn btn-success" href={{url('/Formulaire/create')}}>Ajouter</a>
                <a class="btn btn-primary" href={{url('/Modifier/updateBoisson')}}>Modifier</a>
                <a class="btn btn-danger" href={{url('/DeleteBoissons/destroy')}}>Supprimer</a>
                <br><br>
                @include ('templates/menu') <!-- include quand pas de modification a faire contrairement a extends -->
            </div>
        </div>
    </body>
</html>

                
