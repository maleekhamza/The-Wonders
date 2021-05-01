<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
<<<<<<< HEAD
<<<<<<< HEAD
           
=======
=======
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
<<<<<<< HEAD
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c
=======
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
<<<<<<< HEAD
<<<<<<< HEAD
                    dsi2_ISETBIZERTE
                </div>
                <ul>
                @foreach ($Clients as $client)
                        <li>{{ $client['name'] }} ({{ $client['prenom'] }}) {{ $client['tel'] }}</li>
                @endforeach
            
                </ul>
                </div>
=======
=======
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
                  DSI21
                </div>
            <ul>
             @foreach($clients as $client)
                <li>{{ $client['nom']}} ({{ $client['prenom']}}) {{ $client['datenaissance']}}</li>
             @endforeach
            </ul>
    
<<<<<<< HEAD
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c
=======
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
            </div>
        </div>
    </body>
</html>
