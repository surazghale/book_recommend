@extends('layouts.app')

@section('content')


<!-- container starts -->
<div class="container">

	<!-- Title of the project starts -->
   	<div class="welcome"> <h1> Welcome to the largest BookSharing Platform on the web. </h1> </div>
	<!-- Title of the project ends -->

    {{-- logo --}}
    <img src="img/icon.svg" style="width:50%; display: block; margin-left: auto; margin-right: auto;" alt="jpt">

	<div class="home_brownpaper_bg">	“Fight every battle, everywhere, in your mind.Everyone is your enemy. </br> Everyone is your friend. </br> Every possible series of events is happening all at once.” -Peter Baelish
						
	</div> <!-- brownpaper_bg ends -->

<!-- About Us starts -->
<div class="home_about">
	<h1> TOP RATED BOOK ARE : </h1>
      @foreach($obj as $book_id=>$book_title)

     <li><a href="#">{{ $book_title }}</a><form method="post" action="{{ route('update_dataset') }}">
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
      </form></li> 
    @endforeach

  

	
</div> <!-- About Us ends -->
	
  <!-- wrapper starts -->
  <div class="wrapper">
	<div >	home_matrix_1	
	</div> 
	<div class="matrix">	home_matrix_2	
	</div>
	<div class="matrix">	home_matrix_3	
	</div>
	<div >	home_matrix_4	
	</div>

	
  </div>    <!-- wrapper ends -->

	

</div> <!-- container ends -->

        <!-- footers -->				
        <div class="home_subfooter">		home_subfooter
        </div> <!-- home_subfooter ends -->
    
        <div class="home_footer">	
            <div style="padding: 2 em;"> Developed as a final year project. </div>
        </div> <!-- home_footer ends -->





@endsection
