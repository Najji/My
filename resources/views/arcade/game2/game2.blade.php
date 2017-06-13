<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Arcade</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            * {padding: 0; margin: 0; }
            canvas { background: #eee; display: block; margin: 0 auto; }
            html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 10;
            height: 10vh;
            margin: 10;
            }

            .full-height {
                height: 15vh;
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
                margin-bottom: 10px;
            }

            .underline-on-hover:hover {
              text-decoration: underline;
            }

        </style>

        {{-- Jquery --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="flex-positioncenter position-ref full-height">
            <div class="content">
              <div class="title m-b-md">
                  BREAKOUT
              </div>
            </div>
        </div>

        <br>
        <canvas id="myCanvas" width="480" height="320" ></canvas>  
        <br>
        <script src="/js/arcade/game2.js" type="text/javascript"></script>
        &nbsp
        Instructions : <br>
            &nbsp &nbsp Press P to Pause <br>
            &nbsp &nbsp Press H to increase difficulty <br>
            &nbsp &nbsp Press L to decrease difficulty <br>

        &nbsp
        <a href="http://my.app/arcade">Back to Arcade</a>
        <a href="/arcade/game2/highScores">Go to High Scores</a>         
    </body>
</html>