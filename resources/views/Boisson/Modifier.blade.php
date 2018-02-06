@extends('templates/head')
@section('titre') 
        Boissons Ajout 
@endsection   


<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Ajout Boisson</h1>
        </div>
        <div class="panel-body">
            <form class="" action="" method="POST">
             {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom Boisson</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom Boisson" value="{{$boisson->name}}">
                </div>
                <div class="form-group">
                    <label for="code">Code Boisson</label>
                    <input type="text" class="form-control" name="code" placeholder="Code Boisson" value="{{$boisson->price}}">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="text" class="form-control" name="price" placeholder="Prix">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>

</body>

