<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplikasi Absensi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #FF00FF;
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
                color: #FF00FF;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <font color="magenta" face="AR DECODE">Aplikasi Absensi</font> 
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs"><font size="5" color="magenta" face="Harlow Solid Italic">Documentation</font></a>
                    <a href="https://laracasts.com"><font size="5" color="magenta" face="Harlow Solid Italic">Laracasts</font></a>
                    <a href="https://laravel-news.com"><font size="5" color="magenta" face="Harlow Solid Italic">News</font></a>
                    <a href="https://forge.laravel.com"><font size="5" color="magenta" face="Harlow Solid Italic">Forge</font></a>
                    <a href="https://github.com/laravel/laravel"><font size="5" color="magenta" face="Harlow Solid Italic">GitHub</font></a>
                </div>
            </div>
        </div>
    </body>
</html>
