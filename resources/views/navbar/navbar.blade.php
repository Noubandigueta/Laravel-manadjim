
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container">
    {{--  @auth  --}}
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    {{--  @endauth  --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_home') active @endif" aria-current="page" href="{{ route('app_home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_about') active @endif" aria-current="page" href="{{ route('app_about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_about') active @endif" aria-current="page" href="#">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_about') active @endif" aria-current="page" href="#">My blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getname() == 'app_about') active @endif" aria-current="page" href="#">Contact</a>
        </li>

      </ul>
    </div>

        <!-- Example single danger button -->
        <div class="btn-group">
            @guest
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                     My account
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                </ul>
            @endguest

            @auth
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                 </button>
                <ul class="dropdown-menu">
                    <form action="{{ route('app_logout') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-link btn-sm">logout</button>
                    </form>
                </ul>
            @endauth
        </div>
  </div>
</nav>
