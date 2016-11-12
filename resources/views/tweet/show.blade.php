@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>{{ $tweet->tweet }}</h1>

@endsection
