@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>All Tweets</h1>
    <new-tweet-form :newTweet="tweets"></new-tweet-form>
    <tweet-list :tweets="tweets"></tweet-list>

@endsection
