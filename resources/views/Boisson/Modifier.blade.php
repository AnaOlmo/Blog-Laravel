@extends('templates/head')
@section('titre') 
Boissons modifier 
@endsection   


<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Modification Boisson</h1>
        </div>
        <div class="container">   
            <form class="form-group well col-md-offset-2 col-md-8" action= "" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                <label  for="name" >Nom Boisson</label>
                <input class="form-control" name="name" required="required" type="text" placeholder="Nom Boisson">
                <br><br>
                <label  for="code">Code Boisson</label>
                <input class="form-control" name="code" required="required" type="text" placeholder="Code Boisson">
                <br><br>
                <label  for="price">Prix (en cts)</label>
                <input class="form-control" type="text" name="price" required="required" type="text" placeholder="Prix">
                <br><br>
                <button type="submit" class="btn btn-lg btn-primary">Modifier</button>
            </form>
        </div>

    </body>

