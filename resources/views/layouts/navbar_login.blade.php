<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title></title>
  </head>
  <body>
    <div class="contenedor">
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar">Login</span>
                      <span class="icon-bar">Registro</span>
                      <span class="icon-bar">FAQ</span>
                      <span class="icon-bar">About Us</span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/') }}">
                      {{ config('app.name', 'My Places!') }}
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li>
                          <li><a href="{{url('faq')}}">FAQ</a></li>
                          <li><a href="{{url('/')}}">About Us</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ url('/logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>

          <div class="clear">
          </div>
  </body>
</html>
