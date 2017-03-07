@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">

        <div class="wrapper visible-lg">

            <div class="contain">
                <h1>Welcome</h1>
                <form class="form">
                    <input class="hide" type="text" placeholder="Username">
                    <input class="hide" type="password" placeholder="Password">
                    <a class="btn btn-default" href="/html/about.html">Lartisan</a>
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

            <div class="guide-cover col-md-12 hidden-lg">
                <a class="guide trans" href="javascript(0);" onclick="return false;" hidefocus=""></a>
                <a class="guide arrow-1 trans" href="javascript(0);" onclick="return false;" hidefocus=""></a>
            </div>

        </div>
    </div>
@endsection
