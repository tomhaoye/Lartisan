@extends('layouts.app')

@section('content')
    <div class="wrapper visible-lg">

        <div class="contain">
            <h1>Welcome</h1>
            <form class="form">
                <input class="hide" type="text" placeholder="Username">
                <input class="hide" type="password" placeholder="Password">
                <button type="button" id="login-button" class="login-btn">Lartisan</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    </div>

    <div class="container" id="pjax-container">
        <div class="row">
            <div class="col-md-12 hidden-lg clipped-box">
                <div class="content">
                    <h1>WELCOME TO Lartisan</h1>
                    <h3>let's begin!</h3>
                </div>
            </div>


            <div id="loading" class="col-md-12 hidden-lg">
                <div class="spinner">
                    <div class="bounce1"></div>
                      
                    <div class="bounce2"></div>
                      
                    <div class="bounce3"></div>
                </div>
            </div>

            {{--<div class="cloud-back col-md-12 hidden-lg hidden animated zoomIn">--}}
            {{--<div id="cloud">--}}
            {{--<a href="javascript:" style="color:red;">Laravel</a>--}}
            {{--<a href="javascript:" style="color:red;">Symfony</a>--}}
            {{--<a href="javascript:" style="color:red;">Nette</a>--}}
            {{--<a href="javascript:" style="color:red;">Silex</a>--}}
            {{--<a href="javascript:" style="color:red;">FuelPHP</a>--}}
            {{--<a href="javascript:" style="color:red;">Slim</a>--}}
            {{--<a href="javascript:" style="color:red;">Yii</a>--}}
            {{--<a href="javascript:" style="color:red;">CI</a>--}}
            {{--<a href="javascript:" style="color:red;">TP</a>--}}
            {{--<a href="javascript:" style="color:red;">Lumen</a>--}}

            {{--<a href="javascript:" style="color:blue;">Nginx</a>--}}
            {{--<a href="javascript:" style="color:blue;">Apache</a>--}}
            {{--<a href="javascript:" style="color:blue;">lighttpd</a>--}}
            {{--<a href="javascript:" style="color:blue;">Linux</a>--}}
            {{--<a href="javascript:" style="color:blue;">OSX</a>--}}
            {{--<a href="javascript:" style="color:blue;">Memcache</a>--}}
            {{--<a href="javascript:" style="color:blue;">redis</a>--}}
            {{--<a href="javascript:" style="color:blue;">Mysql</a>--}}
            {{--<a href="javascript:" style="color:blue;">Oracle</a>--}}

            {{--<a href="javascript:" style="color:green;">svn</a>--}}
            {{--<a href="javascript:" style="color:green;">git</a>--}}
            {{--<a href="javascript:" style="color:green;">hg</a>--}}
            {{--<a href="javascript:" style="color:green;">perforce</a>--}}
            {{--<a href="javascript:" style="color:green;">github</a>--}}
            {{--<a href="javascript:" style="color:green;">bitbucket</a>--}}
            {{--<a href="javascript:" style="color:green;">gitlab</a>--}}
            {{--<a href="javascript:" style="color:green;">coding</a>--}}

            {{--<a href="javascript:" style="color:orange;">ecmascript</a>--}}
            {{--<a href="javascript:" style="color:orange;">javascript</a>--}}
            {{--<a href="javascript:" style="color:orange;">Jquery</a>--}}
            {{--<a href="javascript:" style="color:orange;">Vue</a>--}}
            {{--<a href="javascript:" style="color:orange;">Angular</a>--}}
            {{--<a href="javascript:" style="color:orange;">moment</a>--}}
            {{--<a href="javascript:" style="color:orange;">socket.io</a>--}}
            {{--<a href="javascript:" style="color:orange;">nodejs</a>--}}
            {{--<a href="javascript:" style="color:orange;">gulp</a>--}}
            {{--<a href="javascript:" style="color:orange;">grunt</a>--}}
            {{--<a href="javascript:" style="color:orange;">Bootstrap</a>--}}
            {{--<a href="javascript:" style="color:orange;">animate</a>--}}
            {{--<a href="javascript:" style="color:orange;">Backbone</a>--}}
            {{--<a href="javascript:" style="color:orange;">Underscore</a>--}}
            {{--<a href="javascript:" style="color:orange;">React</a>--}}

            {{--</div>--}}
            {{--</div>--}}

            <div class="guide-cover col-md-12 hidden-lg">
                <a class="guide trans" href="javascript(0);" onclick="return false;" hidefocus=""></a>
                <a class="guide arrow-1 trans" href="javascript(0);" onclick="return false;" hidefocus=""></a>
            </div>

        </div>
    </div>
@endsection
