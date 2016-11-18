@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Personal Info</h3>
            </div>
            <div class="panel-body">
                <p>{{ Auth::user()->name }}</p>
                <p>{{ Auth::user()->email }}</p>
                <a href="{{ url('/profile') }}">Edit Profile</a>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
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
</div>
@endsection

@section('scripts')
<script src="{{ elixir('js/app.js') }}"></script>
@endsection
