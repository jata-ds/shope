<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name') }}  
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

</body>

    <!-- Scripts -->
    <script src="{{ asset ('public/js/app.js')}}"></script>
  <!--   Core JS Files   -->
  <script src="{{ asset ('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset ('js/bootstrap-checkbox-radio-switch.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset ('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset ('js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  -->
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset ('js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ asset ('js/demo.js')}}"></script>
	<script src="{{ asset ('js/select2.min.js')}}"></script>
	<script type="text/javascript">

	</script>
</html>
