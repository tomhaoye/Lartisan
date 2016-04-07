@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-sm-9 col-md-9  animated bounceInUp">
                <div class="panel panel-default">
                    <div class="panel-heading title">
                        <a href={{URL::previous()}}>
                            返回
                        </a>
                    </div>
                    <div class="panel-body">

                            <div class="col-lg-12 col-md-12">
                                <div class="">
                                    <div class="col-md-12">
                                        <div>
                                            {{$topic->title}}
                                        </div>
                                        <div class="date">
                                            {{$topic->created_at}}
                                        </div>
                                        <div>
                                            {{$topic->content}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

            </div>


            <div class="col-sm-3 col-md-3">
                <a class="thumbnail loaded" href="http://www.applandr.com/" target="_blank">
                    <img src="/image/bg3.jpg" width="700"height="438">
                </a>
            </div>

        </div>
    </div>
@endsection
