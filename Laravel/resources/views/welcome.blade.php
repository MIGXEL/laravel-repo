<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Antvas Web</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                z-index: 3;
            }

            .position-ref {
                position: absolute;
                width:100%;
            }

            .top-right {
                top: 18px;
                background: rgba(0,0,0,.5);
                padding: 10px;
                width: 100%;

            }

            .links > a {
                color: #ff502f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-bottom: 1.5px solid rgba(0,0,0,0);
                transition: .3s;
            }
            .links > a:hover{
                border-bottom: 1.5px solid #ff502f;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref av-nav">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                 </div>
                 <hr>
            </div> -->

        </div>
    <div class="banner">
        



        <div class="column active">
            <div class="bg">
                <img src="img/bg1.jpg" alt="">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>
            </div>
        </div>
        <div class="column">
            <div class="bg">
                <img src="img/bg2.jpg" alt="">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>
            </div>
        </div>
        <div class="column">
            <div class="bg">
                <img src="img/bg3.jpg" alt="">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>
            </div>
        </div>
        <div class="column">
            <div class="bg">
                <img src="img/bg4.jpg" alt="">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('mouseover', '.column', function() {
            $(this).addClass('active').siblings().removeClass('active');
        })
    </script>
    </body>
</html>
