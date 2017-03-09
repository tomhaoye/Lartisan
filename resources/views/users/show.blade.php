@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        what have you done here
                    </div>
                    <div class="panel-body">
                        <div class="">
                            @foreach($topics as $topic)
                                <a href="{{url('/topic/'.$topic->id)}}">
                                    <div class="topic">
                                        <div class="topic-content" style="border-bottom: 1px solid #aaddff">
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
                                                <div class="img-detail thumbnail" style="border: none;!important;">
                                                    <img src="{{empty($topic->image)?'/image/default_img.jpeg':env('IMG_PREFIX').$topic->image.'?imageView2/1/w/141/h/106'}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            @if(!count($topics))
                                <a href="#" data-pjax="no-pjax">
                                    <div class="col-lg-12 col-md-12 topic">
                                        <h3>you can see nothing at all</h3>
                                    </div>
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            information
                        </a>
                        <div class="panel-body text-center thumbnail" style="border: none">
                            <img width="160" src="{{empty($user->avatar)?'/image/default_img.jpeg':env('IMG_PREFIX').$user->avatar}}"
                                 alt="avatar">
                            <p>{{$user->name}}</p>
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            there are something here
                        </a>
                        <a href="#" class="list-group-item">account</a>
                        <a href="#" class="list-group-item">topics</a>
                        <a href="#" class="list-group-item">something</a>
                        <a href="#" class="list-group-item">awesome</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
