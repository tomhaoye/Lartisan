@extends('layouts.app')

@section('content')
    <div class="container" id="pjax-container">
        <div class="row">

            <div class="col-md-12">
                <div class="create_topic">
                    <form method="post" action="">
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="title">title</label>
                            <input class="form-control col-lg-12 col-sm-12 col-xs-12" type="text" name="title">
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-6">
                            <label for="type">type</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-6">
                            <label for="sort">sort</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="content">content</label>
                            <textarea class="col-lg-12 col-sm-12 col-xs-12 create_content" name="content" id="create_content"></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-xs-12">
                            <label for="parse">parse</label>
                            <div class="markdown_content" id="markdown_content"></div>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                            <input class="btn btn-default" type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
<script src="http://cdn.bootcss.com/marked/0.3.5/marked.min.js"></script>