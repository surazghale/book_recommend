@extends('layouts/app')

@section('content')
       
    <h1> My BookSelf really </h1>
    </br>
{{--   
  @if(count($posts)>0)
        @foreach($posts as $post)
            <div>
            @if( Auth::user()->id == $post->user->id )
            <h3> <b>{{$post->title}} </b></h3>
            <h5>My rating : {{$post->body}}</h5>
            <small>Created at {{$post->created_at}} </small>
            <small>Created by {{$post->user->name}} </small>
              @endif                 
            </div>

            </br>
        @endforeach
       

    @endif     --}}
   

    <div class="grid-container">
	

        <div class="grid-profile">
            <img src="/img/user2.jpg"  style="width:100%;  border-radius: 50px; "> <div style="padding-top:2em"> {{Auth::user()->name}}</br> Thamel <p> Genre:  </p></div>
        </div>
          <!-- grid profile ends -->
    
         <div class="grid-body"> 
                <h2 >
                Your bookself.
                </h2>
                <div class="bookself"> 
                  
                    
                @foreach($posts as $post)
                 @if( Auth::user()->id == $post->user->id )
                    <div class="card">
                        <img src="/img/no_image.jpg" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>{{$post->title}} </b></h3>
                                            <h5>My rating : {{$post->body}}</h5>
                                            <small>Created at {{$post->created_at}} </small>
                                            
                                         
                                            

                            </div>
                    </div>
                    @endif
                 @endforeach    
                    
                            
                    
            
                </div> 	<!-- bookself ends -->
     </div>  <!-- grid container ends -->

@endsection  
