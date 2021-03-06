@extends('templates/head')
@section('titre') 
        Ingredient Delete 
@endsection   


<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Suppression Ingredient</h1>
        </div>
        <div class="container">
            <form class="form-group well col-md-offset-2 col-md-8" action= "" method="POST">
             {{ csrf_field() }}
              {{method_field('DELETE')}}
                
                <label for="name" >Nom Ingredient</label>
                <input class="form-control" name="name" required="required" type="text" placeholder="Nom Ingredient">
                <br><br>
                <label for="code">Code Ingredient</label>
                <input class="form-control" name="code" required="required" type="text" placeholder="Code Ingredient">
                <br><br>
                
                <button type="submit" class="btn btn-lg btn-primary">Supprimer</button>
            </form>
        </div>
    </div>

</body>
