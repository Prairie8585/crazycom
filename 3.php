<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php
		$a = 10;
	?>

	<style type="text/css">

	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 98.5%/1.6 Verdana, Tahoma, sans-serif; 
		color: #333333;
		h1, h2 { 
			color: #000; 
		} 
		header, main, footer { 
			margin: 20px auto; 
			width: 600px; 
		} 
	}
	a{
		color: #000;
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

	#box{
		background: #00f;
		position: relative;
	}

	#box1{
		background: #0f0;
		position: relative;
	}

	.buttonSlide{
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

	.slide{
		border-top: solid 4px #f00;
		background: url(img/btn-slide.gif) no-repeat center top;
	}

	#panel{
		background: #000;
		height: 600px;
		display: none;
	}

	.active {
		background-position: right 12px;
	}


	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>

	<div id="panel">
		<!-- dxf -->
		<div id="box" style="opacity: 1; left: 0px; top: 0px; height: 100px; width: 100px; display: block;">
		
		</div>

		<div id="box1" style="opacity: 1; left: 100px; top: -100px; height: 100px; width: 100px; display: block;">
		
		</div>

	</div>
	<p class="slide"><a href="#" class="buttonSlide">Beater!</a></p>
	<br>
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
		
		
		<!-- <img src="img/baloon.png" id="greenBaloon"> -->
	</main> 

	<footer>
		&copy;copyright 2015
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#box").click(function(){
				$("#box").animate({opacity: "0.1", left: "+=400"}, 1200)
				.animate({opacity: "0.4", top: "+=160", height: "20", width: "20"}, "slow")
				.animate({opacity: "1", left: "0", height: "100", width: "100"}, "slow")
				.animate({top: "0"}, "fast");
				// .slideToggle("slow");
				return false;
			});

			$("#box1").click(function(){
				$("#box1").animate({opacity: "0.1", left: "+=400"}, 1200)
				.animate({opacity: "0.4", top: "+=160", height: "20", width: "20"}, "slow")
				.animate({opacity: "1", left: "100", height: "100", width: "100"}, "slow")
				.animate({top: "-100"}, "fast");
				// .slideToggle("slow");
				
			});
		});

		$(document).ready(function(){
			$(".buttonSlide").click(function(){
				$("#panel").slideToggle("slow");
				$(this).toggleClass("active");
			});
		});

	</script>



</body>
</html>