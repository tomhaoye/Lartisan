@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">
            <div class="col-sm-9 col-md-9  animated bounceInUp">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a class="btn" href="#" id="change_view"><i class="glyphicon glyphicon-list"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="col-lg-12" id="short_view">
                            @foreach($topics as $topic)
                                <a href="{{url('/topic/'.$topic->id)}}">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <img src="{{$topic->image}}" alt="">

                                            <div class="caption">
                                                <h3>{{$topic->title}}</h3>

                                                <div class="content">
                                                    <p>{{$topic->content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <div class="col-lg-12 hidden" id="long_view">
                            @foreach($topics as $topic)
                                <div class="col-lg-12 col-md-12 topic">
                                    <div class="topic-content">
                                        <div class="col-md-9">
                                            <div class="date">
                                                {{$topic->created_at}}
                                            </div>
                                            <h3>
                                                <a href="{{url('/topic/'.$topic->id)}}">
                                                    {{$topic->title}}
                                                </a>
                                            </h3>

                                            <div class="content">
                                                {{$topic->content}}
                                            </div>
                                            <div class="sort">
                                                {{$topic->sort()->getResults()->sort}}
                                            </div>
                                        </div>
                                        <div class="topic-img col-md-3 visible-md visible-lg">
                                            <div class="img-detail">
                                                <div>
                                                    <img src="{{$topic->image}}" height="188">
                                                </div>
                                                <div class="detail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                <div class="p-jax">
                    {{$topics->links()}}
                </div>

            </div>

            <div class="col-sm-3 col-md-3">
                <a class="thumbnail loaded" href="http://www.applandr.com/" target="_blank">
                    <img src="image/bg3.jpg" width="700" height="438">
                </a>
            </div>

        </div>
    </div>
@endsection
