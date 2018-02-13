@extends('templates/head')
@section('titre') 
ingredients modifier 
@endsection   


<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Modification Ingredients</h1>
        </div>
        <div class="container">   
            <form class="form-group well col-md-offset-2 col-md-8" action= "" method="post">
                {{ csrf_field() }}
                {{ method_field("put")}}
                <!--<input type="hidden" name="_method" value="put">-->

                <label  for="name" >Nom Ingredient</label>
                <input class="form-control" name="name" required="required" type="text" placeholder="Nom Ingredient">
                <br><br>
                <label  for="code">Code Ingredient</label>
                <input class="form-control" name="code" required="required" type="text" placeholder="Code Ingredient">
                <br><br>
                <label  for="price">Stock</label>
                <input class="form-control" type="text" name="price" required="required" type="text" placeholder="Stock">
                <br><br>
                <button type="submit" class="btn btn-lg btn-primary">Modifier</button>
            </form>
        </div>

    </body>
