<!DOCTYPE html>
<html>
  <head>
    <title>High Scores</title>
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
<body>
  <div class="flex-positioncenter position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    High Scores!
                </div>
            </div>
     </div>
     <br>
     <br>
  </head>
  <body>
{{--   @foreach ($highScores as $highScore)
      <h1>High Score {{ $highScore->id }}</h1>
      <ul>
        <li>Name: {{ $highScore->name }}</li>
        <li>High Score: {{ $highScore->highscore }}</li>
        <li>message: {{ $highScore->message }}</li>
      </ul>
    @endforeach --}}

      @foreach ($results as $result)
      <ul>

        <li>Name: {{ $result->name}}</li>
        <li>High Score: {{ $result->highscore}}</li>
        <li>Message: {{ $result->message}}</li>

      </ul>
      <br>
    @endforeach
    <a href="http://my.app/arcade/game1">Back to Game</a>
  </body>
</html>