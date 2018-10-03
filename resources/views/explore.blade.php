<html>
 <head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
                 
    .card {
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: white;
    height: auto;
    overflow: hidden;
     
    }
     .card img{
     	border-radius: 8px 8px 0 0;
      width: 100%;
      height: 250px;
      border-radius: 8px 8px 0 0;
     }
                    .card:hover {
                            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                        }

                    .grid-profile >img {
                        border-radius: 8px 8px 0 0;

                        
                        }

                    .card_body {
                    padding: 2px 2px;
                    }
                    
                    .grid-container{
                        display: grid;
                        grid-template-columns: 1fr 4fr;
                        
                        grid-gap: 15px;
                        padding: 1em 1em;
                    }
                    
                    .grid-profile{
                        
                        padding:1rem;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        background : #AAE8C5;
                        font-size: 25px ;
                        
                    }
                    .grid-profile h1{
                          font-size: 2rem;
                          font-weight: 700;
                          letter-spacing: 1px;
                    }
                    .grid-body{
                        
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        display: grid;
                        background : #ECEBE4;
                        padding: 1em 1em;
                       
                        
                    }
                    
                    .bookself-body{
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
                        grid-gap:1.5em;
                        
                        
                    }
 .rate-area:not(:checked) > input {

position: absolute;
top: -9999px;
clip: rect(0,0,0,0);

}



.rate-area:not(:checked) > label {

float: right;

overflow: hidden;
white-space: nowrap;
cursor: pointer;
font-size: 100%;
color: lightgrey;
text-shadow: 1px 1px #bbb;

}



.rate-area:not(:checked) > label:before { content: ''; }



.rate-area > input:checked ~ label {

color: gold;
text-shadow: 1px 1px #c60;
font-size: 150% !important;

}



.rate-area:not(:checked) > label:hover, .rate-area:not(:checked) > label:hover ~ label { color: gold; }



.rate-area > input:checked + label:hover, .rate-area > input:checked + label:hover ~ label, .rate-area > input:checked ~ label:hover, .rate-area > input:checked ~ label:hover ~ label, .rate-area > label:hover ~ input:checked ~ label {

color: gold;
text-shadow: 1px 1px goldenrod;

}
                 
</style>

</head>

<body>
        <h1> Book Recommendation </h1>
    </br>
   

    <div class="grid-container">
  

        <div class="grid-profile">
          <h1>{{ "Name :  ".$name }}</h1>
          <h1>{{ "Email : ".$email }}</h1>
        </div>
          <!-- grid profile ends -->
    
         <div class="grid-body"> 
                
                
                        <div class="bookself-body">  
                    @foreach($obj as $book_id=>$book_title)                     <div class="card" style="border-radius: 8px;">
                        <img src="img/book_1.jpeg">
                            <div class="card_body">
                                    <div>{{ $book_title }}</div>
                                   <form method="post" action="{{ route('update_dataset') }}">
        {{ csrf_field() }}
        <select name="rating">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<input type="hidden" name="book_id" value="{{ $book_id }}">
<input type="submit" name="submit">
      </form>
                                   <!-- rating ends         -->
                                    
                                 
                            </div>
                    </div>
                    @endforeach

                    

                   

                    
                   
                   
                   
                   
        


                       
                        
            
                    
                            
                    
                    </div>
                <!--   bookself ends -->
            </div>
     </div>  <!-- grid container ends -->    
</body>
</html>
