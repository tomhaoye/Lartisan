@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">
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

            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        upload you avatar
                    </div>
                    <div class="panel-body">
                        <div class="">

                            <p id="img_container">
                                <a id="img_pick" href="javascript:" class="btn btn-info" role="button">upload
                                    image</a>
                            </p>
                            <img id="img" src="/image/default_img.jpeg" alt="...">
                            <input type="hidden" name="image" id="img_hidden" value="">
                            <p></p>
                            <input type="button" class="btn btn-warning" id="save_avatar" value="save">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
