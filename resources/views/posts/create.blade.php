@extends('layouts/app')
@section('content')
        
<h1>Create</h1>
{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    

<div class='form-group'>
    {{Form::label('title','Title:')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'enter the name of the book here...'])}}
</div>
<div class='form-group'>
        {{Form::label('body','Rating (in stars):')}}
        {{Form::text('body','',['class'=>'form-control','placeholder'=>'enter your rating here...'])}}
</div>

{{Form::submit('Submit',['class'=>'btn btn-primary'])}}


{!! Form::close() !!}
@endsection 