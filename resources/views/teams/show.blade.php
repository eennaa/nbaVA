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

  <form method="POST" action="/comment">
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

    <div>
      <div class="form-group">
          <label for="content">Comment</label>
          <input name= "content" type="content" class="form-control" id="content"> 
          <input name = "team_id" type="hidden" value="{{ $team->id }}">
          <small id="content" class="form-text text-muted">Write your comment here.</small>
      </div>
      
      
      <button type="submit" class="btn btn-primary">Submit comment</button>
    </div>
  </form>

  <div>
    @foreach($team->comments as $comment)
      {{ $comment->content}} <br>
      by {{ $comment->user_id }}
    @endforeach

  </div>
  

  
  
  
@endsection