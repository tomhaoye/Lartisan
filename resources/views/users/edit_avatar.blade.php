@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <input type="hidden" id="uptoken" value="{{$uptoken}}">

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-heading">
                            there are something here
                        </a>
                        <div class="panel-body">
                            <a href="{{ route('users.edit_avatar', $user->id) }}" class="list-group-item">edit
                                avatar</a>
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
                            upload you avatar
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <form action="{{ route('users.update_avatar', $user->id) }}" method="post">
                                <p id="img_container">
                                    <a id="img_pick" href="javascript:" class="btn btn-info" role="button">upload
                                        avatar</a>
                                </p>
                                <img class="thumbnail" height="300" width="300" id="img"
                                     src="{{empty($user->avatar)?'/image/default_avatar.jpeg':env('IMG_PREFIX').$user->avatar.'?imageView2/1/w/300/h/300'}}"
                                     alt="...">
                                <input type="hidden" name="avatar" id="img_hidden" value="">
                                <p></p>
                                <input type="submit" class="btn btn-warning" id="save_avatar" value="save">
                                {!! csrf_field() !!}
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
