@extends('layouts.master')

@section('title')
    Sign In
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign In</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="text" id="email" name="email">
                </div><div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
@endsection