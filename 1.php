<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 1</title>
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
		/*jQuery(document).ready(function(){ 
			jQuery("h2").css("color", "red"); 
		});

		(function($, undefined){
			$(function(){
				$("article1 h2").css("color", "blue");
				яке значення що на html = значення в мові програмуванн
			});
		})(jQuery);

		$(function(){
			$("").css()
		})*/

		
	</script>

</head>
<body>
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
		<img src="img/baloon.png" id="greenBaloon">
	</main> 

	<footer>
		&copy;copyright 2015
	</footer>

	<script type="text/javascript">
		/*$("#button2").click(function(event){
			alert("way-beyond-houdini");
		});*/
		$("#button1").on("click.hello", function(){
			// $("#button2").toggle(500);   show and hide element
			// $("#button2").show(500);
			// $("#button2").hide(500);
			// $("#button2").fadeToggle();  changes opacity
			// $("#button2").slideUp();
			// $("#button2").slideDown();
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

	</script>



</body>
</html>