@extends('templates/head')
@section('titre') 
        Boissons Ajout
@endsection
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Ajout Boisson</h1>
        </div>
        <div class="container">
            <form class="form-group well col-md-offset-2 col-md-8" action="" method="POST">
             {{ csrf_field() }}
                
                    <label for="name">Nom Boisson</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom Boisson">
                    <br><br>
                    <label for="code">Code Boisson</label>
                    <input type="text" class="form-control" name="code" placeholder="Code Boisson">
                    <br><br>
                    <label for="price">Prix</label>
                    <input type="text" class="form-control" name="price" placeholder="Prix">
                    <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>