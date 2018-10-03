<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
                     .home_brownpaper_bg
                        {
	                    background-image : url(/img/home_brownpaper_bg.png);
                        background-repeat : no-repeat;
                        font-family : Baskerville Old Face;
                        font-size : 39px;
                        text-align:center;
                        max-height:360px;
                        padding: 100px 0 ;
                        margin: 0.5em 0;
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
                    .wrapper
                    {
                        //background : #FFFFFF;
                        //background : rgba(255, 255, 255, 1);
                        
                        display: grid;
                        grid-template-columns: 50% 50%;
                    }
                    .wrapper > div{
                        padding: 2em;
                        text-align: center;
                    }
                    .matrix
                    {
                        background : #42E3BC;
                        background : rgba(66, 227, 188, 1);
                        
                    }
                    
                    .home_about{
                        text-align: center;
                        padding:3em;
                    }

                    .welcome{
                        text-align: center;
                        padding: 2em;
                    }
        .card {
   		 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	 	 transition: 0.3s;
    		 width: 100%;
    		 height:auto;
    		 border-radius: 8px;
		 background: white;
		}

                        .card:hover {
                                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                            }

                        .grid-profile >i mg {
                            border-radius: 8px 8px 0 0;
                            
                            }

                        .card_body {
                        padding: 2px 16px;
                        }
                        
                        .grid-container{
                            display: grid;
                            
                            //border: 2px solid black;
                            grid-gap: 15px;
                            padding: 0 1em;
                        }
                        
                        .grid-profile{
                            
                            padding: 2em;
                            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                            background : #AAE8C5;
                            font-size: 25px ;
                            
                            
                        }
                        .grid-body{
                            
                            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                            display: grid;
                            grid-template-rows: 1fr 6fr 1fr 6fr;
                            background : #ECEBE4;
                            padding: 0 1em;
                            
                            
                        }
                        .bookself {
                            display: grid;
                            grid-template-columns:  5fr 5fr 5fr ;
                            grid-gap:15px;
                            text-align: center;
                        }
                        .rating {
			width: 426px;
			font-size: 45px;
			overflow:hidden;
		}

		.rating span,
    .rating label {
		
			color: #ddd;
			text-decoration: none;
		  transition: color .4s;
		}

		.rating span:focus,
		.rating span:focus ~ span		{
			color: orange;
			cursor: pointer;
		}
		.rating2 {
			direction: rtl;
		}

    </style>
</head>
<body>
    
        <!-- nav bar starts -->
        <nav >
            <div  style=" background : #42E3BC; ">
                

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                            @if (Auth::guest())
                            <li class="active"><a href="/home">Home</a></li>
                            @else
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Add </a></li>
                            @endif
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        </div> <!-- nav bar ends -->

        @yield('content')
    
   

	
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
