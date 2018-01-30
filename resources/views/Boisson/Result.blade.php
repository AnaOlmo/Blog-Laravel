@extends('templates/head')
@section('titre') 
        Boissons Ajout resultat
@endsection   

<body>     
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>Nom Boisson</h3>
            <p>valeur : <b>{{ $Boissons['Nom Boisson'] }}</b></p>

            <h3>Code Boisson</h3>
            <p>valeur : <b>{{ $Boissons['code Boisson'] }}</b></p>

            <h3>Prix</h3>
            <p>valeur : <b>{{ $Boissons['Prix'] }}</b></p>

        </div>
    </div>
</body>
    
