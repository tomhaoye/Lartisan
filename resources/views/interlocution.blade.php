@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-sm-9 col-md-9  animated fadeIn">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a class="btn" href="#" id="change_view">
                                    <span class="badge">0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12" id="long_view">
                            @foreach($topics as $topic)
                                <a href="{{url('/topic/'.$topic->id)}}" data-pjax="no-pjax">
                                    <div class="col-lg-12 col-md-12 topic">
                                        <div class="topic-content hvr-grow">
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
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
