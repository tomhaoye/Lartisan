@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-sm-12 col-md-9  animated fadeIn">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="hvr-icon-back" href={{URL::previous()}}>
                            返回
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <div class="title-header">
                                <blockquote>
                                    <h1>{{$topic->title}}.</h1>
                                    <small>Publish On {{$topic->created_at}}</small>
                                </blockquote>
                            </div>
                            <div class="topic-ins-content">
                                {!!$topic->content!!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-sm-12 col-md-3 animated fadeIn">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4 class="panel-title">author info</h4>
                    </div>
                    <div class="panel-body text-center thumbnail" style="border: none">
                        <img width="160"
                             src="{{empty($topic->user()->getResults()->avatar)?'/image/default_img.jpeg':env('IMG_PREFIX').$topic->user()->getResults()->avatar}}"
                             alt="avatar">
                        <p>{{$topic->user()->getResults()->name}}</p>
                        <p>{{$topic->user()->getResults()->email}}</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Comment:
                    </div>
                    <!-- todo foreach -->
                    <div class="comment-body">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" height="60" width="60" src="/image/bg1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">jeffrey way</h4>
                                would you like to say something?
                            </div>
                        </div>
                    </div>
                    <div class="comment-body">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" height="60" width="60" src="/image/bg4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">geekeek</h4>
                            <!-- todo get the @ user id-->
                                <a href="{{route('users.show',1)}}">@jeffrey way</a> i want to eat something...
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <form action="" method="post">
                    <div class="form-top">
                        {!!csrf_field()!!}
                        <textarea class="col-sm-12 col-md-12 form-control" placeholder="markdown here :-)" rows="5"
                                  name="comment"></textarea>
                        <input class="btn btn-primary" type="submit" value="comment">
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
