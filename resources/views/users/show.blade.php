@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            information
                        </a>
                        <div class="panel-body text-center thumbnail" style="border: none">
                            <a href="{{ route('users.edit_avatar', $user->id) }}">
                                <img width="160"
                                     src="{{empty($user->avatar)?'/image/default_img.jpeg':env('IMG_PREFIX').$user->avatar}}"
                                     alt="avatar">
                            </a>
                            <p>{{$user->name}}</p>
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                </div>

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

            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        latest article
                    </div>
                    <div class="panel-body">
                        <div class="article">
                            @foreach($topics as $topic)
                                <div class="simple-item">
                                    <a href="{{url('/topic/'.$topic->id)}}">
                                        {{$topic->title}}
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
                                    <div class="col-lg-12 col-md-12 topic">
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
