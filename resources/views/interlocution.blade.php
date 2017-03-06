@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-sm-9 col-md-9  animated fadeIn">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                Dream out loud
                            </div>
                        </div>
                    </div>
                    <div class="">
                        @foreach($topics as $topic)
                            <a href="{{url('/topic/'.$topic->id)}}">
                                <div class="topic">
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
                                        <div class="topic-img col-md-3 visible-md visible-lg">
                                            <div class="img-detail">
                                                <div>
                                                    <img src="{{$topic->image}}" height="188">
                                                </div>
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

                <div class="p-jax">
                    {{$topics->links()}}
                </div>

            </div>

            <div class="col-sm-3 col-md-3">
                <div class="col-sm-12 col-md-12">
                    <a class="col-lg-12 btn btn-success thumbnail right-side" data-pjax="no-pjax"
                       href="{{route('topic.create')}}">have a talk</a>
                </div>

                <div class="col-sm-12 col-md-12">
                    <a class="thumbnail loaded" href="#" target="_blank">
                        <img src="image/bg3.jpg" width="700" height="438">
                    </a>
                </div>

                <div class="col-sm-12 col-md-12">
                    <a class="thumbnail loaded" href="#" target="_blank">
                        <img src="image/bg3.jpg" width="700" height="438">
                    </a>
                </div>

                <div class="col-sm-12 sol-md-12">
                    <div class="panel panel-default corner-radius">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title">Recommended</h3>
                        </div>
                        <div class="panel-body text-center" style="padding-top: 5px;">
                            <a href="https://ruby-china.org" target="_blank" rel="nofollow" title="Ruby China"
                               style="padding: 3px;">
                                <img src="https://dn-phphub.qbox.me/assets/images/friends/ruby-china.png"
                                     style="width:150px; margin: 3px 0;">
                            </a>
                            <a href="http://golangtc.com/" target="_blank" rel="nofollow" title="Golang 中国"
                               style="padding: 3px;">
                                <img src="https://dn-phphub.qbox.me/assets/images/friends/golangcn.png"
                                     style="width:150px; margin: 3px 0;">
                            </a>
                            <a href="http://cnodejs.org/" target="_blank" rel="nofollow" title="CNode：Node.js 中文社区"
                               style="padding: 3px;">
                                <img src="https://dn-phphub.qbox.me/assets/images/friends/cnodejs.png"
                                     style="width:150px; margin: 3px 0;">
                            </a>
                            <a href="https://testerhome.com" target="_blank" rel="nofollow" title="Tester Home"
                               style="padding: 3px;">
                                <img src="https://dn-phphub.qbox.me/testerhome-logo.png"
                                     style="width:150px; margin: 3px 0;">
                            </a>
                            <a href="https://easywechat.org/" target="_blank" rel="nofollow" title="Easy We Chat"
                               style="padding: 3px;">
                                <img src="https://easywechat.org/logo.svg" style="width:150px; margin: 3px 0;">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
