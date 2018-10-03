@extends('layouts/app')

@section('content')
       
    <h1> My BookSelf really </h1>
    </br>
   

    <div class="grid-container">
	

        <div class="grid-profile">
        </div>
          <!-- grid profile ends -->
    
         <div class="grid-body"> 
                <h2 >
                Your bookself.
                </h2>
                <div class="bookself"> 
                  
                    
                    <div class="card">
                        <img src="{{asset('img/no_image.jpg')}}" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>Book title </b></h3>
                                            
                                         
                                            

                            </div>
                    </div><div class="card">
                        <img src="{{asset('img/no_image.jpg')}}" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>Book title </b></h3>
                                            
                                         
                                            

                            </div>
                    </div><div class="card">
                        <img src="{{asset('img/no_image.jpg')}}" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>Book title </b></h3>
                                            
                                         
                                            

                            </div>
                    </div><div class="card">
                        <img src="{{asset('img/no_image.jpg')}}" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>Book title </b></h3>
                                            
                                         
                                            

                            </div>
                    </div><div class="card">
                        <img src="{{asset('img/no_image.jpg')}}" style="width:100%; height:70%;" >
                            <div class="card_body">
                                   
                                            <h3> <b>Book title </b></h3>
                                            
                                         
                                            

                            </div>
                    </div>

                    
                            
                    
            
                </div> 	<!-- bookself ends -->
            </div>
     </div>  <!-- grid container ends -->

@endsection  
