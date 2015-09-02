<html>
	<head>
		<title> Hello World! </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			h1 {
				position : absolute;
				width : 10%;
				-webkit-animation-duration: 4s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-direction: alternate;
				-moz-animation-duration: 4s;
				-moz-animation-iteration-count: infinite;
				-moz-animation-direction: alternate;
				animation-duration: 4s;
				animation-iteration-count: infinite;
				animation-direction: alternate;
			}
			
			h1:hover {
				-webkit-transform: rotate(20deg); /* Safari */
				-moz-transform: rotate(20deg); /* Safari */
				transform: rotate(20deg);
			}
			
			/*---------------WEBKIT-----------------*/
			@-webkit-keyframes right-side {
				0% {left : 0%; color: red; 	-webkit-transform: rotate(20deg); }
				25% {color: yellow; -webkit-transform: rotate(60deg); }
				50%  {color: blue; -webkit-transform: rotate(10deg); }
				75%  {color: green; -webkit-transform: rotate(5deg); }
				100% {left : 95%; color: red; -webkit-transform: rotate(90deg);}

			}
			
			@-moz-keyframes right-side {
				0% {left : 0%; color: red; 	-moz-transform: rotate(20deg);}
				25% {color: yellow; -moz-transform: rotate(60deg); }
				50%  {color: blue; -moz-transform: rotate(10deg); }
				75%  {color: green; -moz-transform: rotate(5deg); }
				100% {left : 95%; color: red; -moz-transform: rotate(90deg); }

			}
			
			@keyframes right-side {
				0% {left : 0%; color: red; 	transform: rotate(20deg);}
				25% {color: yellow; transform: rotate(60deg);}
				50%  {color: blue; transform: rotate(10deg);}
				75%  {color: green; transform: rotate(5deg);}
				100% {left : 95%; color: red; transform: rotate(90deg);}
			}
			
			
			@-webkit-keyframes left-side {
				0% {left : 95%; color: red; 	-webkit-transform: rotate(20deg); }
				25% {color: yellow; -webkit-transform: rotate(60deg);}
				50%  {color: blue; -webkit-transform: rotate(10deg); }
				75%  {color: green; -webkit-transform: rotate(5deg); }
				100% {left : 0%; color: red; -webkit-transform: rotate(90deg);}

			}
			
			@-moz-keyframes left-side {
				0% {left : 95%; color: red; -moz-transform: rotate(20deg); }
				25% {color: yellow; -moz-transform: rotate(60deg); }
				50%  {color: blue; -moz-transform: rotate(10deg); }
				75%  {color: green; -moz-transform: rotate(5deg); }
				100% {left : 0%; color: red; -moz-transform: rotate(90deg); }

			}
			
			@keyframes left-side {
				0% {left : 95%; color: red; 	-webkit-transform: rotate(20deg); transform: rotate(20deg);}
				25% {color: yellow; -webkit-transform: rotate(60deg); transform: rotate(60deg);}
				50%  {color: blue; -webkit-transform: rotate(10deg); transform: rotate(10deg);}
				75%  {color: green; -webkit-transform: rotate(5deg); transform: rotate(5deg);}
				100% {left : 0%; color: red; -webkit-transform: rotate(90deg); transform: rotate(90deg);}
			}
			
			body {
				overflow : hidden;
			}
		</style>
	<head>
	<body>
		<?php 
			for ($i = 0; $i < 10; $i++)
			{
				$direction = ($i % 2 == 1)? '-webkit-animation-name: right-side; animation-name: right-side; -moz-animation-name: right-side;' : '-webkit-animation-name: left-side; animation-name: left-side; -moz-animation-name: left-side;';
				$duration = rand( 5, 10);
				print '<h1 style="top :'. 50* $i.'px; -webkit-animation-duration: '. $duration .'s; -moz-animation-duration: '. $duration .'s; '.$direction.'">Hello World!</h1>';
			}
				
		?>
	</body>
</html>
	