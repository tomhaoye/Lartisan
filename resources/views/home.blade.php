@extends('layouts.app')

@section('content')
<div class="container" id="pjax-container">
    <div class="row">
        <div class="col-sm-9 col-md-9  animated bounceInUp">
            <div class="panel panel-default">
                <div class="panel-heading">Great</div>
                <div class="panel-body">

                    @foreach($topics as $topic)
                        <div class="col-lg-12 col-md-12 topic">
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
                                <div class="col-md-3 visible-md visible-lg">
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

        <div class="col-sm-3 col-md-3">
            <a class="thumbnail loaded" href="http://www.applandr.com/"
               onclick="_hmt.push(['_trackEvent', 'imagelink', 'click', 'AppLandr'])" target="_blank">
                <img src="image/bg3.jpg" width="700"
                     height="438" alt="AppLandr">
            </a>
        </div>

    </div>
</div>
@endsection
