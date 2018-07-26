@extends('layouts.master')

@section('title')
    Register
@endsection


@section('content')
    <form method="POST" action="/register">
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input name= "name" type="name" class="form-control" id="name">        
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name= "email" type="email" class="form-control" id="email">        
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name= "password" type="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm password</label>
            <input name= "password_confirmation" type="password" class="form-control" id="password_confirmation">
            <small id="password_confirmation" class="form-text text-muted">Please type your password again.</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection