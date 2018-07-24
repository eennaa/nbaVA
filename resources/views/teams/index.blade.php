@extends('layouts.master')

@section('title')
  All Teams
@endsection


@section('content')
  

  @foreach($teams as $team)
    <div>
      <a href="{{ "/teams/" . $team->id }}" >{{ $team->name }} </a>
    </div>
  @endforeach
@endsection