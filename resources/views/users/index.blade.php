@extends('users.layout.layout')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-5 pushContainer">
            <div class="pushBlock">
                <div class="push">
                    <h2>Click me</h2>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-offset-1 col-sm-4">
            <a href="{{ url('/login/facebook') }}" class="btn btn-primary btn-block facebookButton">
                <i class="icon-facebook"></i>    Login with Facebook
            </a><br>
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Leaders</span>
                </div>

                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>

                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Scott Stevens</span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection