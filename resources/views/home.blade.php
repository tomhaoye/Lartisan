@extends('layouts.app')

@section('content')
<div class="container" id="pjax-container">
    <div class="row">
        <div class="col-md-9  animated bounceInLeft">
            <div class="panel panel-default">
                <div class="panel-heading">Great</div>
                <div class="panel-body">

                    @foreach($topics as $topic)
                        <div class="col-xs-12 col-md-12 topic">
                            <div class="topic-content">
                                <div class="col-md-9">
                                    <div class="date">
                                        {{$topic->created_at}}
                                    </div>
                                    <h3>
                                        {{$topic->title}}
                                    </h3>
                                    <div class="content">
                                        {{$topic->content}}
                                    </div>
                                    <div class="sort">
                                        {{$topic->sort()->getResults()->sort}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="{{$topic->image}}" width="180">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

<div class="p-jax">
    {{$topics->links()}}
</div>

        </div>

        <div class="col-md-3 animated bounceInUp">
            <a class="thumbnail loaded" href="http://www.applandr.com/"
               onclick="_hmt.push(['_trackEvent', 'imagelink', 'click', 'AppLandr'])" target="_blank">
                <img src="image/bg3.jpg" width="700"
                     height="438" alt="AppLandr">
            </a>
        </div>

        <div class="col-md-3">
            <div id="cloud">
                        <a href="javascript:" style="color:red;">Laravel</a>
                        <a href="javascript:" style="color:red;">Symfony</a>
                        <a href="javascript:" style="color:red;">Nette</a>
                        <a href="javascript:" style="color:red;">Silex</a>
                        <a href="javascript:" style="color:red;">FuelPHP</a>
                        <a href="javascript:" style="color:red;">Slim</a>
                        <a href="javascript:" style="color:red;">Yii</a>
                        <a href="javascript:" style="color:red;">CI</a>
                        <a href="javascript:" style="color:red;">TP</a>
                        <a href="javascript:" style="color:red;">Lumen</a>

                        <a href="javascript:" style="color:blue;">Nginx</a>
                        <a href="javascript:" style="color:blue;">Apache</a>
                        <a href="javascript:" style="color:blue;">lighttpd</a>
                        <a href="javascript:" style="color:blue;">Linux</a>
                        <a href="javascript:" style="color:blue;">OSX</a>
                        <a href="javascript:" style="color:blue;">Memcache</a>
                        <a href="javascript:" style="color:blue;">redis</a>
                        <a href="javascript:" style="color:blue;">Mysql</a>
                        <a href="javascript:" style="color:blue;">Oracle</a>

                        <a href="javascript:" style="color:green;">svn</a>
                        <a href="javascript:" style="color:green;">git</a>
                        <a href="javascript:" style="color:green;">hg</a>
                        <a href="javascript:" style="color:green;">perforce</a>
                        <a href="javascript:" style="color:green;">github</a>
                        <a href="javascript:" style="color:green;">bitbucket</a>
                        <a href="javascript:" style="color:green;">gitlab</a>
                        <a href="javascript:" style="color:green;">coding</a>

                        <a href="javascript:" style="color:orange;">ecmascript</a>
                        <a href="javascript:" style="color:orange;">javascript</a>
                        <a href="javascript:" style="color:orange;">Jquery</a>
                        <a href="javascript:" style="color:orange;">Vue</a>
                        <a href="javascript:" style="color:orange;">Angular</a>
                        <a href="javascript:" style="color:orange;">moment</a>
                        <a href="javascript:" style="color:orange;">socket.io</a>
                        <a href="javascript:" style="color:orange;">nodejs</a>
                        <a href="javascript:" style="color:orange;">gulp</a>
                        <a href="javascript:" style="color:orange;">grunt</a>
                        <a href="javascript:" style="color:orange;">Bootstrap</a>
                        <a href="javascript:" style="color:orange;">animate</a>
                        <a href="javascript:" style="color:orange;">Backbone</a>
                        <a href="javascript:" style="color:orange;">Underscore</a>
                        <a href="javascript:" style="color:orange;">React</a>

                    </div>
        </div>
    </div>
</div>
@endsection
