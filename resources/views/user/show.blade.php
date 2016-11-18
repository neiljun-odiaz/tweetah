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
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Personal Info</h3>
            </div>
            <div class="panel-body">
                @if (Session::has('message'))
                   <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/update') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$userprofile->name) }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control" name="email" value="{{ old('email',$userprofile->email) }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('/home') }}" class="btn btn-default">Go Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ elixir('js/app.js') }}"></script>
@endsection
