@extends('layouts.master')

@section('title')
  {{ $player->first_name }}
  {{ $player->last_name }}
@endsection



@section('content')
  <h2 class='title'> {{ $player->first_name }} {{ $player->last_name }} </h2>
  <p>{{ $player->email }} </p>
  <p>
    <a href="{{ "/teams/" . $player->team->id }}"> {{ $player->team->name }} </a>
  </p>
  
  
  

  
  
  

@endsection