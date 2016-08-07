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

<main id="main_panel">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">

            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand animated bounceInLeft toggle-button" data-pjax="no-pjax"
                   href="#">
                    LaraMe
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav animated fadeIn">
                    <li><a data-pjax="no-pjax" href="{{ url('/index') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav animated fadeIn">
                    <li><a data-pjax="no-pjax" href="{{ url('/interlocution') }}">Interlocution</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::check())
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('users.show',Auth::id()) }}"><i class="fa fa-btn fa-gears"></i>Setting</a>
                                </li>
                                <li><a data-pjax="no-pjax" href="{{ url('/logout') }}"><i
                                                class="fa fa-btn fa-sign-out"></i>SignOut</a></li>
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

    @yield('content')

    <footer id="footer" class="footer">
        <a href="/html/about.html">About</a>
    </footer>
</main>

<div id="up_down">
    <ul class="nav nav-pills">
        <li role="presentation" class="dropup">
            <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                GO <i class="glyphicon glyphicon-eject"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="#top" class="J_backtop">
                        Top
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#footer" class="J_backbottom">
                        Bottom
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<nav id="menu" class="">
    <a href="https://github.com/tomhaoye/larame" target="_blank">
        <header class="menu-header">
            <div class="menu-header-title">
                <h4>Larame</h4>
            </div>
        </header>
    </a>

    <section class="menu-section">


        <div id="jquery-accordion-menu" class="jquery-accordion-menu red">
            <ul id="demo-list">

                <li><a href="{{ url('/index') }}"><i class="fa fa-home"></i>Home </a></li>
                <li><a href="#"><i class="fa fa-glass"></i>Events </a></li>
                <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">12 </span></li>
                <li><a href="#"><i class="fa fa-cog"></i>Services </a>
                    <ul class="submenu">
                        <li><a href="#">Web Design </a></li>
                        <li><a href="#">Hosting </a></li>
                        <li><a href="#">Design </a>
                            <ul class="submenu">
                                <li><a href="#">Graphics </a></li>
                                <li><a href="#">Vectors </a></li>
                                <li><a href="#">Photoshop </a></li>
                                <li><a href="#">Fonts </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Consulting </a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>
                    <ul class="submenu">
                        <li><a href="#">Web Design </a></li>
                        <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span>
                        </li>
                        <li><a href="#">Photoshop </a></li>
                        <li><a href="#">Programming </a></li>
                    </ul>
                </li>
                <li><a href="{{ route('users.show',Auth::id()) }}"><i class="fa fa-user"></i>Settings </a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>Notification </a></li>

            </ul>
        </div>

    </section>
</nav>

<!-- JavaScripts -->
<script src="{{ elixir('js/all.js') }}"></script>
<script src="http://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
<script src="http://cdn.bootcss.com/slideout/0.1.12/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('main_panel'),
        'menu': document.getElementById('menu'),
        'padding': 300,
        'tolerance': 70
    });

    // Toggle button
    document.querySelector('.toggle-button').addEventListener('click', function () {
        slideout.toggle();
    });

    jQuery("#jquery-accordion-menu").jqueryAccordionMenu();
</script>

<div>{!! Yuansir\Toastr\Facades\Toastr::render() !!}</div>

</body>
</html>
