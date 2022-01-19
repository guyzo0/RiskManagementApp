<!doctype html>
<html lang="en">
  <head>
  	<title>list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('danal/li/css/style.css')}}">

	</head>
	<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <!-- Right Side Of Navbar -->
            <ul class=" ml-auto">
                <!-- Authentication Links -->
                @if(Auth::guard('web')->check())
                    <li class="nav-item d-none d-sm-inline-block">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('web')->user()->name }} (ANALYST)<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="expertDropdown">
                            <a href="{{route('home')}}" class="dropdown-item">Analyst Dashboard</a>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
                @if(Auth::guard('expert')->check())
                    <li class="nav-item d-none d-sm-inline-block">
                        <a id="expertDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('expert')->user()->name }} (EXPERT) <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="expertDropdown">
                            <a href="{{route('expert.home')}}" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
                @if(Auth::guard('decideur')->check())
                    <li class="nav-item d-none d-sm-inline-block">
                        <a id="decideurDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('decideur')->user()->name }} (MANAGER) <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="expertDropdown">
                            <a href="{{route('decideur.home')}}" class="dropdown-item">Dashboard Decideur</a>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
</nav> 
  @yield('content')

	<script src="{{ asset('danal/li/js/jquery.min.js')}}"></script>
  <script src="{{ asset('danal/li/js/popper.js')}}"></script>
  <script src="{{ asset('danal/li/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('danal/li/js/main.js')}}"></script>

	</body>
</html>

