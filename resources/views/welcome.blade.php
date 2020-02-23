<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="panel">



                  <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.36 34.26" aria-labelledby="loadingIcon loadingDesc" >
 <title id='loadingIcon'>Loading icon</title>
	<desc id="loadingDesc">Spining recycling logo to indicate there is something loading</desc>
 <g id="arrow-top">
  <path
   d="M12.79,7.81,14,8.55a.78.78,0,0,0,1.08-.25l1.17-1.88a2.1,2.1,0,0,1,2.9-.66,2.08,2.08,0,0,1,.66.66l2.7,4.32-2.67,1.67a1,1,0,0,0-.33,1.44,1.07,1.07,0,0,0,.65.47L27.35,16a1,1,0,0,0,1.25-.78h0L30.27,8a1,1,0,0,0-.79-1.25,1,1,0,0,0-.79.13L26,8.52,23.33,4.2a6.29,6.29,0,0,0-8.67-2,6.44,6.44,0,0,0-2,2L11.5,6.08a.78.78,0,0,0,.25,1.08l1.12.7"
   transform="translate(-0.76 -0.87)" />
 </g>
 <g id="arrow-bottom">
  <path
   d="M30,18.41l-1.27.8a.79.79,0,0,0-.25,1.08l1.81,2.88a2.1,2.1,0,0,1-.68,2.89,2,2,0,0,1-1.1.32H22.19V23.24a1,1,0,0,0-1.05-1,1,1,0,0,0-.74.31l-5.23,5.23a1.05,1.05,0,0,0,0,1.48h0l5.23,5.24a1.05,1.05,0,0,0,1.79-.74V30.57h6.27A6.29,6.29,0,0,0,33.79,21h0L32,18.07a.78.78,0,0,0-1.08-.25l-1,.63"
   transform="translate(-0.76 -0.87)" />
 </g>
 <g id="arrow-side">
  <path
   d="M11.72,28.53V27.16a.78.78,0,0,0-.79-.78H7.53a2,2,0,0,1-1.1-.32,2.1,2.1,0,0,1-.68-2.89l3.33-5.32,2.67,1.66a1,1,0,0,0,1.57-1.12h0l-1.66-7.22h0a1,1,0,0,0-1.26-.78L3.19,12.05A1.05,1.05,0,0,0,2.87,14l2.66,1.67L2.21,21a6.29,6.29,0,0,0,5.33,9.62h3.39a.79.79,0,0,0,.79-.79V28.49"
   transform="translate(-0.76 -0.87)" />
 </g>
</svg>
<h1>Welcome to Methane !</h1>


                    <!-- @component('components.who')
                    @endcomponent -->
                  </div>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
