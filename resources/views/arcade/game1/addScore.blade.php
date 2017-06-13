<!DOCTYPE html>
<html>
<head>
<title> Add Score</title>
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
    </head>
<body>
	<div class="flex-positioncenter position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Add your name and a message!
                </div>
            </div>
     </div>
     <br>
     <br>

<form action="{{ action('arcade\game1\HighScoresg1Controller@highScores')}}" method="post">
  Name:<br>
  <input type="text" name="name" value="">
  <br>
  Message:<br>
  <input type="text" name="message" value="">
  <input type="hidden" name="highscore" value="{{ $var }}">
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <br><br>
  <input type="submit" value="Submit" name="submitbutton">
</form> 

</body>
</html>
