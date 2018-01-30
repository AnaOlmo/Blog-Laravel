
<!-- copy / paste les links menu et save as menu.blade.php, si on veut qu'ils apparaissent dans une autre page/ 1- aller dans la page souhaitee et rajouter @ include('template/menu')
Creation URL absolu double accolades "url('nom page')double accolades"-->
 <div class="links">
                    <a href="{{url('Tabord')}}">Tableau de Bord</a>
                    <a href="{{url('Boissons')}}">Boissons</a>
                    <a href="{{url('Ingredients')}}">Ingredients</a>
                    <a href="{{url('Monnayeur')}}">Monnayeur</a>
                    <a href="{{url('Recettes')}}">Recettes</a>
                    <a href="{{url('Ventes')}}">Ventes</a>
                    <a href="{{url('front_view')}}">Front view</a>
 </div>