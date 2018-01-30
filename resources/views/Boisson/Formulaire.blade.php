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
            <form class="" action="/Boissons" method="POST">
             {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Nom Boisson</label>
                    <input type="text" class="form-control" name="title" placeholder="Nom Boisson">
                </div>
                <div class="form-group">
                    <label for="title1">Code Boisson</label>
                    <input type="text" class="form-control" name="title" placeholder="Code Boisson">
                </div>
                <div class="form-group">
                    <label for="title2">Prix</label>
                    <input type="text" class="form-control" name="title" placeholder="Prix">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>