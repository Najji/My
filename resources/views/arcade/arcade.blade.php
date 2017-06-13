@include('shared/header')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arcade</title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 10;
            height: 10vh;
            margin: 10;
        }

        .full-height {
            height: 10;
        }

        .flex-positionleft {
            align-items: left;
            display: inline-block;
            justify-content: center;
        }

		.flex-positioncenter {
            align-items: center;
            display: inline-block;
            justify-content: center;
        }

        .flex-positionright {
            align-items: right;
            display: inline-block;
            justify-content: center;
        }


        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 3vw;
        }

        .m-b-md {
            margin-bottom: 10px;
        }

        .underline-on-hover:hover {
          text-decoration: underline;
        }

        #container {
		    border: 2px;
		    height: 125px;

		    text-align: justify;
		    -ms-text-justify: distribute-all-lines;
		    text-justify: distribute-all-lines;


		    min-width: 612px;
		}
		.stretch {
		    width: 100%;
		    display: inline-block;
		    font-size: 0;
		    line-height: 0
		}
		.positionleft, .positioncenter, .positionleft {
		    width: 150px;
		    height: 125px;
		    vertical-align: top;
		    display: inline-block;
		    *display: inline;
		    zoom: 1
		}


    </style>
</head>
	<body>	

		<div class="flex-positionleft position-ref full-height">
			<div class="content">
		  	  <div class="title m-b-md">
		        <a> WELCOME TO THE ARCADE, CHOOSE WHICH GAME YOU WOULD LIKE TO PLAY</a>
			  </div>
			</div>
		</div>
		
		<div id="container">

			<div class="flex-positionleft position-ref full-height">
				<div class="content">
			  	  <div class="title m-b-md">
			        <a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game1';"> GAME 1</a>
				  </div>
				</div>
			</div>

			<div class="flex-positioncenter position-ref full-height">
				<div class="content">
			  	  <div class="title m-b-md">
			        <a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game2';"> GAME 2</a>
				  </div>
				</div>
			</div>

			<div class="flex-positionright position-ref full-height">
				<div class="content">
			  	  <div class="title m-b-md">
			        <a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game3 ';"> GAME 3</a>
				  </div>
				</div>
			</div>

			<span class="stretch"></span>

			<div id="container">
				<a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game1 ';"> 
					<img src="/img/snakes.png" alt="Snakes Game" style="width:304px;height:228px;"></a>
				<a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game2 ';"> 
					<img src="/img/breakout.jpg" alt="Snakes Game" style="width:304px;height:228px;"></a>
				<a class="underline-on-hover enter-arcade cursor: pointer" style="cursor: pointer;" onclick="location.href = '/arcade/game3 ';"> 
				<img src="" alt="In Development" style="width:304px;height:228px;"></a>
				<span class="stretch"></span>

			</div>
		</div>
	</body>