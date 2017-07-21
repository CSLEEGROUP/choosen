@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hi {{ Auth::user()->name }}, You are logged in!</div>

                    <div class="panel-body">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Things you might have missed...</div>
                    <div class="panel-body">
                            <div class="media">
                                    <div class="media-body">
                                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/sUakwV6Yt-g" frameborder="0" allowfullscreen>
                                        </iframe>
                                    </div>
                            </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
