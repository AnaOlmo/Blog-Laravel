
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{('css/app.css')}}">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

           <!-- Styles -->
           <style>
           html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
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
                Front View Customer
            </div>
            
            <table class="table table-striped table-bordered">

                <tr> <!--tete tableau avant Foreach -->

                    <th>code boisson</th>
                    <th>Nom boisson</th>
                    <th>Prix</th>
                    <th>Nbre Sucre</th>
                    

                </tr> 
                @foreach($Boisson as $maBoisson) <!-- parcours les tableaux. foreach ne fonctionne que pour les tableaux et les objets. passe en revue le tableau $Boisson. À chaque itération, la valeur de l'élément courant est assignée à $Boissons et le pointeur interne de tableau est avancé d'un élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant).--> 
                <form method="post" action="{{route('UserOrder', $maBoisson->code_boisson)}}">
                    {{ csrf_field()}}

                    <tr><td>{{ $maBoisson->code_boisson }}</td><!-- code a executer -appel de variable, recuper ID-->
                        <td>{{ $maBoisson->nom_boisson }}</td>
                        <td>{{ $maBoisson->Prix }}</td>
                        <td>{{ $maBoisson->Sucre }} <input type="number" min="0" max="5" name="nbSucre" placeholder="Combien de sucres ?"></td>
                        <td><button type="submit">Commander</a></td>
                        </tr> </form>

                        @endforeach
                    </table>   
                    
                </div>
            </div>
        </body>
        </html>