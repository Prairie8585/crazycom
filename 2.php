<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php
		$a = 10;
	?>

	<style type="text/css">
				
		a:focus {
			outline: none;
		}
		#panel {
			background: #754c24;
			height: 200px;
			display: none;
		}
		.slide {
			margin: 0;
			padding: 0;
			border-top: solid 4px #422410;
			background: url(images/btn-slide.gif) no-repeat center top;
		}
		.btn-slide {
			background: url(images/white-arrow.gif) no-repeat right -50px;
			text-align: center;
			width: 144px;
			height: 31px;
			padding: 10px 10px 0 0;
			margin: 0 auto;
			display: block;
			font: bold 120%/100% Arial, Helvetica, sans-serif;
			color: #fff;
			text-decoration: none;
		}
		.active {
			background-position: right 12px;
		}






	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 98.5%/1.6 Verdana, Tahoma, sans-serif; 
		color: #333333;
		width: 570px;
		h1, h2 { 
			color: #000; 
		} 
		header, main, footer { 
			margin: 20px auto; 
			width: 600px; 
		} 
	}

	a:focus {
			outline: none;
	}

	#panel {
			background: #754c24;
			height: 400px;
			display: none;
	}

	.slide {
			margin: 0;
			padding: 0;
			border-top: solid 4px #422410;
			background: url(img/btn-slide.gif) no-repeat center top;
		}
		.btn-slide {
			background: url(img/white-arrow.gif) no-repeat right -50px;
			text-align: center;
			width: 244px;
			height: 31px;
			padding: 10px 10px 0 0;
			margin: 0 auto;
			display: block;
			font: bold 120%/100% Arial, Helvetica, sans-serif;
			color: #fff;
			text-decoration: none;
		}
		.active {
			background-position: right 12px;
		}

	#content #button1 {
		margin-left: 150px;
		width: 100px;
		height: 50px;
	}

	#content #button1 span{
		font-size: 1.5em;
	}


	#content #button2 {
		margin-left: 50px;
		width: 150px;
		height: 50px;
	}

	#content #button2 span{
		font-size: 1.5em;
	}

	#content #greenBaloon {
		
		width: 200px;
		height: auto;
	}

	</style>
	<script type="text/javascript">
		
	</script>

</head>
<body>

	<div id="panel" style="display: none;">
		<!-- you can put content here -->
	</div>
	
	<p class="slide"><a href="#" class="btn-slide">Slide Panel</a></p>

	<header> 
		<h1>Page Title</h1> 
		<p>Page Description</p> 
	</header> 
	<main id="content" class="wrapper box"> 
		<article1> 
			<h2>Article Title</h2> 
			<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc urna metus, ultricies eu, congue vel, laoreet... </p> 
		</article1> 
		<article> 
			<h2>Article Title</h2> 
			<p> Morbi malesuada, ante at feugiat tincidunt, enim massa gravida metus, commodo lacinia massa diam vel eros... </p> 
		</article> 

		<button id="button1"><span>Intern!</span></button>
		<button id="button2"><span>Developer!</span></button>
		<br>
		

<!-- 		<img src="img/baloon.png" id="greenBaloon"> -->
	</main> 

	<footer>
		&copy;copyright 2015
	</footer>


	<script type="text/javascript">
		/*$("#button2").click(function(event){
			alert("way-beyond-houdini");
		});*/
		$("#button1").on("click.hello", function(){
			$("#button2").slideToggle();
		});

		$("#button2").on("click.goodby", function(){
			alert(event);
		});

		$("#greenBaloon").on("click", function(){
			$('#greenBaloon').animate({
				top:'+=100'
			});
		});

		

		$(document).ready(function(){
			$(".btn-slide").click(function(){
				$("#panel").slideToggle("slow");
				$(this).toggleClass("active");
			});
		});
	</script>

</body>
</html>