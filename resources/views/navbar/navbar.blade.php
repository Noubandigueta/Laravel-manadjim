
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: relative; width: 100%;">
  <div class="container">
    {{--  @auth  --}}
        <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="Logo" width="100" height="100"></a>
    {{--  @endauth  --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_home') active @endif" aria-current="page" href="{{ route('app_home') }}" style="color: green">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_about') active @endif" aria-current="page" href="{{ route('app_about') }}" style="color: green">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: green">Our services</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('app_bateau') }}" style="color: rgb(9, 23, 88)">Génie civil et Hydraulique</a></li>
              <li><a class="dropdown-item" href="{{ route('app_graphisme') }}" style="color: rgb(39, 9, 88)">Graphisme</a></li>
              <li><a class="dropdown-item" href="{{ route('app_agrobusiness') }}" style="color: rgb(66, 9, 88)">Agro Business</a></li>
            </ul>
          </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_blogs') active @endif" aria-current="page" href="{{ route('app_blogs') }}" style="color: green">My blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_contact') active @endif" aria-current="page" href="{{ route('app_contact') }}" style="color: green">Contact</a>
        </li>

      </ul>
    </div>

        <!-- Example single danger button -->
        <div class="btn-group">
            @guest
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: green">
                     My account
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('login') }}" style="color: green">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}" style="color: green">Register</a></li>
                </ul>
            @endguest

            @auth
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: blue">
                    {{ Auth::user()->name }}
                 </button>
                <ul class="dropdown-menu">
                    <form action="{{ route('app_logout') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-link btn-sm">logout</button>
                    </form>
                    <a href="{{ route('app_dashboard') }}">Dashboard</a>
                </ul>
            @endauth
        </div>
  </div>
</nav>
