@extends('layout')

@section('title', 'Welcome')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">All Tweets</h3>
                </div>
                <div class="panel-body">
                    <new-tweet-form :tweets="tweets"></new-tweet-form>
                    <tweet-list :tweets="tweets"></tweet-list>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Side bar</h3>
                </div>
                <div class="panel-body">
                    <p>
                        Test
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
