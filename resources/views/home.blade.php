<html>
<head>
  
  <style>
   

body
{
  font-family:  Calibri, Helvetica, sans-serif;
  font-size: 18px;  
}
.nav
{
  padding-bottom: 40px;
  font-family: Utopia;
}
h2{
    
  font-size: 30px;
  padding:20px;
  margin: 0;
}



.home_brownpaper_bg
{
    width: 100%;
    background-image: url(img/home_brownpaper_bg.jpg);
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 1em;
    padding: 50px 10px;
    /* height: 100%; */
    margin: 0.5em 0;
}
.home_icon
{
  background-image : url(home_icon.png);
  background-repeat : no-repeat;
}
body{
  //height: 1525 px
  //width: 1346 px;
  //background: purple;
  
} 

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  background : #42E3BC;
  background : rgba(66, 227, 188, 1);
}

li {
    float: left;
}

li a {
    display: block;
  
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.container{
  margin: 0 15px 0 15px;
  
}
.home_about{
  text-align: center;
  padding:3em;
}

.welcome{
  text-align: center;
  padding: 2em;
}



.home_footer{
    padding: 2em;
    background: #333;
    color: #fff;
    text-align: center;
}

.home_subfooter
{
  background : #3FA9F5;
  background : rgba(63, 169, 245, 1);
     padding: 2em;
       color: #fff;
       text-align: center;
     margin: 2em 0 0 0;
}



 .card {
   display: block;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    height: auto;
    border-radius: 8px;
    background: white;
     
    }
.card img{
  width:100%; 
  min-height: 250px;
  border-radius: 8px 8px 0px 0px;
}
                    .card:hover {
                            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                        }

                    .grid-profile >img {
                        border-radius: 8px 8px 0 0;
                        
                        }

                    .card_body {
                       padding: 2px 2px;
                        word-break: break-all;
                    }
                    
                    .grid-container{
                        display: grid;
                        grid-template-columns: 1fr 4fr;
                        
                        grid-gap: 15px;
                        padding: 1em 1em;
                    }
                    
                    .grid-profile{
                        
                        padding: 1.5em;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        background : #AAE8C5;
                        font-size: 25px ;
                      
                        
                        
                    }
                    .grid-body{
                        
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        display: grid;
                        grid-template-rows: 1fr 0.2fr ;
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

<!-- nav bar starts -->
  <div >
    
       <ul>
        <li><a href="#">Home</a></li>
      <li><a href="{{ route('explore') }}">Explore</a></li>
        
      <li style="float:right"><a href="{{ route('logout') }}">Sign Out</a></li>
       </ul>
    <h6> </h6>
  </div> <!-- nav bar ends -->

    
<!-- container starts -->
<div class="container">

  <!-- Title of the project starts -->
      <div class="welcome"> <img src="{{asset('img/icon.svg')}}" alt="" width="150px";><h1> Welcome to the Book Recommendation project. </h1> </div>
  <!-- Title of the project ends -->
  <h4>Top rated books.</h4>

  <div class="home_brownpaper_bg">
@foreach($obj_2 as $book_id=>$book_title)
    <div class="card">
      <img src="{{asset('img/book_1.jpeg')}}">
        <div class="card_body" >
           <div>{{ $book_title }}</div>
          

          
        </div>
    </div>
    @endforeach
    
  </div> <!-- brownpaper_bg ends -->
  <div style="padding:0 45%; display:inline;">
    
  <button style="background: BurlyWood  ; padding: 0.3em 1em; border-radius:5px;">Pre.</button>
  <button style="background: BurlyWood; padding: 0.3em 1em; border-radius:5px;">Next</button>
    
  </div>
<!-- About Us starts -->
<div class="home_about">
  <h1> ACKNOWLEDGEMENT </h1>
  <p> 
      We would like to thank all those who devoted their energy, resources and time to the success of this project. The foremost thanks goes to our determined and ever encouraging computer faculty teacher and supervisor for this project Mr. Dadhi Ram Ghimire. No words can explain our gratitude for your ever help and guidance this process. However, I cannot forget the support of my college administration that granted us all the resources necessary in this endeavor. 
  </p>
  
</div> <!-- About Us ends -->
  


  <!-- footers -->        
  <div class="home_subfooter">    home_subfooter
  </div> <!-- home_subfooter ends -->

  <div class="home_footer"> 
    <div style="padding: 2 em;"> Developed as a final year project. </div>
  </div> <!-- home_footer ends -->

</div> <!-- container ends -->
</body>
</html>
