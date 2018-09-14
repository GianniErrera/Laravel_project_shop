 <!-- Navigation -->
{{--     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Emporio da Gianni</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chi siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> --}}

    <div id="app">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      {{--   <nav class="navbar navbar-default navbar-static-top"> --}}
            <div class="container">
                <div class="navbar-header">

                	<div class="container">

                  <a class="navbar-brand" href="/home">Emporio da zio Gianni</a>

                    {{-- {{<a class="navbar-brand" href="{{redirect()->action('App\Http\Controllers\HomeController@home'}}">Emporio da Gianni</a>}} --}}
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chi siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatti</a>
            </li>
          </ul>
        </div>
      </div>

{{--                     <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> --}}


                   {{--  <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Emporio da Gianni') }}
                    </a>
                </div> --}}

{{--                 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else <div class = "navbar-brand">
                        {{Auth::user()->name}}
                            @if (Auth::user()->isAdmin == 1) {{"-  Admin"}}</div>
                            @else {{"- User"}}
                             @endif
                            
                           </div>

                      
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <div class = form-group>
                                              <form id = "logout-form" method = "POST" action = "{{ route('logout') }}" style="display:none;">
                                        <button type="submit" class="btn btn-primary">Log out</button>
                                      
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                      
                            {{-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
{{--                                         <div class = form-group>
                                              <form id = "logout-form" method = "POST" action = "{{ route('logout') }}" style="display:none;">
                                        <button type="submit" class="btn btn-primary">Log out</button> --}}
                                      
                                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> --}}
                                    </li> 
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      </div>