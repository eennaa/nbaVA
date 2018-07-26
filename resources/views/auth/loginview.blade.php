@extends('layouts.master')

@section('title')
  Login
@endsection

@section('content')
  <form method="POST" action="/login">
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
        <label for="exampleInputEmail1">Email address</label>
        <input name= "email" type="email" class="form-control" id="email">        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name= "password" type="password" class="form-control" id="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
@endsection