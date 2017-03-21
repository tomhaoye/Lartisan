@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <input type="hidden" id="uptoken" value="{{$uptoken}}">
        <div class="row">

            <div class="col-md-12">
                <div class="create_topic">
                    <form method="post" action="{{ route('topic.update', $topic->id) }}">
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="title">title</label>
                            <input class="form-control col-lg-12 col-sm-12 col-xs-12" type="text" name="title"
                                   value="{{$topic->title}}">
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-6">
                            <label for="type">type</label>
                            <select name="type_id" class="form-control">
                                @foreach($type as $item)
                                    <option value="{{$item->id}}">{{$item->type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-6">
                            <label for="sort">sort</label>
                            <select name="sort_id" class="form-control">
                                @foreach($sort as $item)
                                    <option value="{{$item->id}}">{{$item->sort}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="content">content</label>
                            <textarea class="col-lg-12 col-sm-12 col-xs-12 create_content" name="content"
                                      id="create_content">
                                {{$topic->content}}
                            </textarea>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="parse">parse</label>

                            <div class="markdown_content" id="markdown_content">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                            <div class="col-lg-6 thumbnail">

                                <p id="img_container">
                                    <a id="img_pick" href="javascript:" class="btn btn-info" role="button">upload
                                        image</a>
                                </p>
                                <img id="img" style="height: 80px"
                                     src="{{empty($topic->image)?'/image/default_img.jpeg':env('IMG_PREFIX').$topic->image}}"
                                     alt="...">
                                <input type="hidden" name="image" id="img_hidden" value="{{empty($topic->image)?'':env('IMG_PREFIX').$topic->image}}">

                            </div>
                            <div class="col-lg-6">
                                <input class="btn btn-default" type="submit" value="update">
                            </div>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
<script src="http://cdn.bootcss.com/marked/0.3.5/marked.min.js"></script>
