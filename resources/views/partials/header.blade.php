<header>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link {{Route::currentRouteName() === 'guests.index' ? 'active' :''}}" href="{{route('guests.index')}}" aria-current="page">
                Home
                <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link {{Route::currentRouteName() === 'guests.hats.index' ? 'active' :''}} " href="{{route('guests.hats.index')}}">Hats</a>
        </div>
    </nav>


</header>