@extends('layouts.app')

@section('content')
<div class="container" id="pjax-container">
    <div class="row">
        <div class="col-md-9  animated bounceInLeft">
            <div class="panel panel-default">
                <div class="panel-heading">Great</div>
                <div class="panel-body">

                    @foreach($topics as $topic)
                        <div class="col-xs-12 col-md-12 topic">
                            <div class="topic-content">
                                <div class="col-md-9 content">
                                    {{$topic->created_at}}
                                    <h2>
                                        {{$topic->title}}
                                    </h2>
                                    <div>
                                        {{$topic->content}}
                                    </div>
                                    <span>
                                    {{$topic->sort()->getResults()->sort}}
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <img src="{{$topic->image}}"
                                         height="180">
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

        <div class="col-md-3 animated bounceInUp">
            <a class="thumbnail loaded" href="http://www.applandr.com/"
               onclick="_hmt.push(['_trackEvent', 'imagelink', 'click', 'AppLandr'])" target="_blank">
                <img src="image/bg3.jpg" width="700"
                     height="438" alt="AppLandr">
            </a>
        </div>
    </div>
</div>
@endsection
