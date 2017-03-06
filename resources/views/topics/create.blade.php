@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-md-12">
                <div class="create_topic">
                    <form method="post" action="/topic">
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="title">title</label>
                            <input class="form-control col-lg-12 col-sm-12 col-xs-12" type="text" name="title">
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
                                      id="create_content"></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="parse">parse</label>

                            <div class="markdown_content" id="markdown_content">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                            <div class="col-lg-6">
                                <button class="btn btn-info" onclick="return false;">upload image</button>
                                <input style="opacity: 0;position: absolute;cursor: hand;width: 122px;height: 34px;bottom: 0"
                                       type="file" name="image" id="image">
                            </div>
                            <div class="col-lg-6">
                                <input class="btn btn-default" type="submit" value="submit">
                            </div>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
