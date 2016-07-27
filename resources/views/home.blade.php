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

                        <div class="col-lg-12" id="short_view">
                            @foreach($topics as $topic)
                                <a href="{{url('/topic/'.$topic->id)}}" data-pjax="no-pjax">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hvr-rotate">
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

                    </div>
                </div>

                <div class="p-jax">
                    {{$topics->links()}}
                </div>

            </div>

            <div class="col-sm-3 col-md-3">
                <a class="col-lg-12 btn btn-success thumbnail right-side" data-pjax="no-pjax" href="{{route('topic.create')}}">create a new topic now</a>
            </div>

            <div class="col-sm-3 col-md-3">
                <a class="thumbnail loaded" href="#" target="_blank">
                    <img src="image/bg3.jpg" width="700" height="438">
                </a>
            </div>

            <div class="col-sm-3 col-md-3">
                <a class="thumbnail loaded" href="#" target="_blank">
                    <img src="image/bg3.jpg" width="700" height="438">
                </a>
            </div>

        </div>
    </div>
@endsection
