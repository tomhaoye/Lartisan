@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-heading">
                            information
                        </a>
                        <div class="panel-body text-center thumbnail" style="border: none">
                            <a href="{{ route('users.edit_avatar', $user->id) }}">
                                <img width="160"
                                     src="{{empty($user->avatar)?'/image/default_avatar.jpg':env('IMG_PREFIX').$user->avatar.'?imageView2/1/w/160'}}"
                                     alt="avatar">
                            </a>
                            <p>{{$user->name}}</p>
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-heading">
                            there are something here
                        </a>
                        <div class="panel-body">
                            <a href="#" class="list-group-item">account</a>
                            <a href="#" class="list-group-item">topics</a>
                            <a href="#" class="list-group-item">something</a>
                            <a href="#" class="list-group-item">awesome</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            latest article
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="article">
                            @foreach($topics as $topic)
                                <div class="simple-item">
                                    <a href="{{url('/topic/'.$topic->id)}}" class="col-lg-8">
                                        <div class="panel-href-item">
                                            {{$topic->title}}
                                        </div>
                                    </a>
                                    <span>
                                        <span>｜</span>
                                        {{$topic->sort()->getResults()->sort}}
                                        <span>｜</span>
                                        <span class="time-ago">{{timeAgo(strtotime($topic->created_at),$_SERVER['REQUEST_TIME'])}}</span>
                                    </span>
                                </div>
                            @endforeach
                            @if(!count($topics))
                                <a href="#" data-pjax="no-pjax">
                                    <div class="col-lg-12 col-md-12">
                                        <h3>you can see nothing at all</h3>
                                    </div>
                                </a>
                            @endif

                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            latest comment
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="article">
                            @foreach($comments as $comment)
                                <div class="simple-item">
                                    <a href="{{url('/topic/'.$comment->topic_id)}}" class="col-lg-8">
                                        <div class="panel-href-item">
                                            {{$comment->content}}
                                        </div>
                                    </a>
                                    <span>
                                        <span>｜</span>
                                        <span class="time-ago">{{timeAgo(strtotime($comment->created_at),$_SERVER['REQUEST_TIME'])}}</span>
                                    </span>
                                </div>
                            @endforeach
                            @if(!count($comments))
                                <a href="#" data-pjax="no-pjax">
                                    <div class="col-lg-12 col-md-12">
                                        <h3>you can see nothing at all</h3>
                                    </div>
                                </a>
                            @endif

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
