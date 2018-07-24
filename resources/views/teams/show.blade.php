@extends('layouts.master')

@section('title')
  {{ $team->name }}
@endsection


@section('content')
  <h2 class='title'>{{ $team->name }} </h2>
  <p>{{ $team->email }} </p>
  <p>{{ $team->adress }} </p>
  <p>{{ $team->city }} </p>
  <p> Players:
    
    @foreach($team->players as $player)
    <li>
        <a href="{{ "/players/" . $player->id }}">
          {{ $player->first_name }}
          {{ $player->last_name }}
        </a>
    </li>
    @endforeach 
  </p>
  

  
  
  
@endsection