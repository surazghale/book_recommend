@extends('layouts/app')

@section('content')
       
    <h1> My BookSelf </h1>
    </br>
  
  @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card">
            @if( Auth::user()->id == $post->user->id )
            <h3> <b>{{$post->title}} </b></h3>
            <h5>My rating : {{$post->body}}</h5>
            <small>Created at {{$post->created_at}} </small>
            <small>Created by {{$post->user->name}} </small>
              @endif                 
            </div>

        </br>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No posts found</p>
    @endif  
        
        

@endsection  
