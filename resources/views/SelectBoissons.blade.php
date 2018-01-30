@extends('templates/head')   
    @section('titre')
        Details
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
                  Details
                    <hr>
            

                    <table class="table table-striped table-bordered">
                        
                        <tr>
                            
                        
                        <th>nom_boisson</th>
                        <th>Prix</th>
                       
                        </tr> 
                            <tr><td>{{ $Boissons->nom_boisson }}</td>
                            <td>{{ $Boissons->Prix }}</td>

                    </table>

                    
                </div>
                
                @include ('templates/menu')
            </div>
        </div>
    </body>
</html>

                
