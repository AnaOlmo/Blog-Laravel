@extends('templates/head')
@section('titre') 
        Ingredient Ajout
@endsection
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Ajout Ingredient</h1>
        </div>
        <div class="container">
            <form class="form-group well col-md-offset-2 col-md-8" action="" method="POST">
             {{ csrf_field() }}
                
                    <label for="name">Nom Ingredient</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom Ingredient">
                    <br><br>
                    <label for="code">Code Ingredient</label>
                    <input type="text" class="form-control" name="code" placeholder="Code Ingredient">
                    <br><br>
                    <label for="price">Stock</label>
                    <input type="text" class="form-control" name="price" placeholder="Stock">
                    <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>