@extends('layout')

@section('title', 'Welcome')

@section('content')

    <p>This is my body content.</p>
    <h1>All Tweets</h1>

    <form class="" action="/tweet" method="post">
        {{ csrf_field() }}
        <h2>New Tweet</h2>
        <textarea name="tweet" rows="8" cols="40"></textarea>
        <p>
            <input type="submit" name="name" value="Tweet">
        </p>
    </form>

    <ul>
        @foreach( $tweets as $tweet )
        <li>
            {{ $tweet->tweet }} - {{ $tweet->user->name }} 
            {{ Auth::id() }} 
            @if ( Auth::id() == $tweet->user->id )
            <a href="/tweet/{{ $tweet->id }}/edit">Edit</a> | <a href="/tweet/{{ $tweet->id }}/delete">Edit</a>
            @endif
        </li>
        @endforeach
    </ul>

@endsection
