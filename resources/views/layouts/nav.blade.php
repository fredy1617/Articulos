@yield('nav')
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="{{ url('/infobase') }}">Articulos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >

    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/inicio') }}">Revistas<span class="sr-only">(current)</span></a>
        </li>   
    </ul>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" ><br><span class="sr-only">(current)</span></a>
        </li>
    </ul>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" ><br><span class="sr-only">(current)</span></a>
        </li>
    </ul>
    </ul><ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" ><br><span class="sr-only">(current)</span></a>
        </li>  
    </ul>

    <ul class="navbar-nav mr-auto">
        @guest
            <li><a href="{{ route('login') }}">Login <br></a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>

    </li>
      @endguest
    </ul>
  </div>
</nav>



