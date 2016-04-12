@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-sm-12 col-md-10  animated fadeIn">
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


            <div class="col-sm-12 col-md-2 animated fadeIn">
                <a class="thumbnail loaded" href="http://www.applandr.com/" target="_blank">
                    <img src="/image/bg3.jpg" width="700"height="438">
                </a>
            </div>

            <div class="col-sm-12 col-md-10">
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
                                <h4 class="media-heading">would you like to say something?</h4>
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
                                <h4 class="media-heading">i want to eat something...</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-10">
                <form action="" method="post">
                    <div class="form-top">
                        {!!csrf_field()!!}
                        <textarea class="col-sm-12 col-md-12 form-control" placeholder="markdown here :-)" rows="5" name="comment"></textarea>
                        <input class="btn btn-primary" type="submit" value="comment">
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
