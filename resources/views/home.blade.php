@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="panel panel-default Profile">
            <div class="panel-heading Profile__cover"></div>
            <div class="panel-body Profile__details">
                <div class="Profile__photo">
                    <img src="/images/profile-pic-placeholder.jpg" alt="" />
                </div>
                <div class="Profile__name">
                    <p class="Profile__name--fullname"><a href="{{ url('/profile') }}">{{ Auth::user()->name }}</a></p>
                    <p class="Profile__name--email">{{ Auth::user()->email }}</p>
                </div>
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
