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
                    <li><a data-pjax="no-pjax" href="{{ url('/home') }}">Home</a></li>
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

<nav id="menu" class="">
    <a href="https://github.com/tomhaoye/larame" target="_blank">
        <header class="menu-header">
            <span class="menu-header-title">Notifications</span>
        </header>
    </a>

    <section class="menu-section">
        <h3 class="menu-section-title">Docs</h3>
        <ul class="menu-section-list">
            <li><a href="https://github.com/mango/slideout#installation" target="_blank">Installation</a></li>
            <li><a href="https://github.com/mango/slideout#usage" target="_blank">Usage</a></li>
            <li><a href="https://github.com/mango/slideout#api" target="_blank">API</a></li>
            <li><a href="https://github.com/mango/slideout#npm-scripts" target="_blank">npm-scripts</a></li>
        </ul>
    </section>

    <section class="menu-section">
        <h3 class="menu-section-title">Slideout</h3>
        <ul class="menu-section-list">
            <li><a href="https://github.com/mango/slideout" target="_blank">Fork it</a></li>
            <li><a href="https://github.com/mango/slideout/issues/new" target="_blank">Create an issue</a></li>
            <li><a href="https://github.com/mango/slideout/releases/">Download</a></li>
        </ul>
    </section>

    <section class="menu-section">
        <h3 class="menu-section-title">Mango</h3>
        <ul class="menu-section-list">
            <li><a href="https://getmango.com" target="_blank">About Mango</a></li>
            <li><a href="https://twitter.com/getmango" target="_blank">Follow Us</a></li>
        </ul>
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
</script>

<div>{!! Yuansir\Toastr\Facades\Toastr::render() !!}</div>

</body>
</html>
