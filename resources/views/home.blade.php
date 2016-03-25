@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <textarea name="message" id="message" cols="60" rows="10" disabled="disabled"></textarea>
                    <textarea name="say" id="say" cols="60" rows="2" placeholder="here insert"></textarea>
                    <button onclick="message.scrollTop=message.scrollHeight" id="send">send message</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
