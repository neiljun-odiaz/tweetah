@extends('layout')

@section('title', 'Welcome')

@section('content')

    <p>This is my body content.</p>
    <h1>All Tweets</h1>
    <ul>
        @foreach( $tweets as $tweet )
        <li>
            {{ $tweet->tweet }}
            <a href="/tweet/{{ $tweet->id }}/edit">Edit</a>
        </li>
        @endforeach
    </ul>

@endsection
