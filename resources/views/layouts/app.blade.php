<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraMe</title>

    <link href="{{ elixir('css/all.css') }}" rel='stylesheet' type='text/css'>
    <link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
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
                <a class="navbar-brand animated bounceInLeft" data-pjax="no-pjax" href="{{ Auth::check()?url('/home'):url('/') }}">
                    LaraMe
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav animated fadeIn">
                    <li><a class="p-jax" href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a data-pjax="no-pjax" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a class="p-jax" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="p-jax" href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>
    <nav class="navbar navbar-default top-bar">
    </nav>

    @yield('content')


    <div class="up-down">
        <ul class="nav nav-pills">
            <li role="presentation" class="dropup">
                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    GO <i class="glyphicon glyphicon-eject"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#top" class="J_backtop">
                           Go To Top
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#footer" class="J_backbottom">
                            Go To Bottom
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <footer id="footer" class="footer">
        <div class="footer-container">
        </div>
    </footer>
            <!-- JavaScripts -->
    <script src="{{ elixir('js/all.js') }}"></script>
    <script src="http://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
    @if(!is_mobile())
    <script type="text/javascript" src="//github.atool.org/canvas-nest.min.js"></script>
    @endif

    <div>{!! Yuansir\Toastr\Facades\Toastr::render() !!}</div>

</body>
</html>
