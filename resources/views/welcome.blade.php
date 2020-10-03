<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chitter 2.0</title>


       
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Lobster', sans-serif;
                height: 100vh;
                margin: 4;
                font-weight: 180;
                
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
                text-decoration: none;
                text-transform: uppercase;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .2rem;
                
            }
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Chitter 2.0
                </div>

                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>