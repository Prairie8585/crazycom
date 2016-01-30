<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php
		$a = 10;
	?>

	<style type="text/css">

	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 75%/120% Arial, Helvetica, sans-serif; 
		margin: 10px auto;
		width: 570px;
		color: #333333;
		h1, h2 { 
			color: #000; 
		} 
		header, main, footer { 
			margin: 20px auto; 
			width: 600px; 
		} 
	}

	.menu {
	margin: 100px 0 0;
	padding: 0;
	list-style: none;
	}
	.menu li {
		padding: 0;
		margin: 0 2px;
		float: left;
		position: relative;
		text-align: center;
	}
	.menu a {
		padding: 14px 10px;
		display: block;
		color: #000000;
		width: 144px;
		text-decoration: none;
		font-weight: bold;
		background: url(img/button.gif) no-repeat center center;
	}
	.menu li em {
		background: url(img/hover.png) no-repeat;
		width: 180px;
		height: 45px;
		position: absolute;
		top: -85px;
		left: -15px;
		text-align: center;
		padding: 20px 12px 10px;
		font-style: normal;
		z-index: 2;
		display: none;
	}



	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>
	<ul class="menu">
		<li>
			<a href="#">Junior Developer</a>
			<em slyle="display: none; top: -85px;">
				A wall of design ideas, web trends, and tutorials
			</em>
		</li>
		<li>
			<a href="#">Middle Developer</a>
			<em style="display: none; top: -85px;">
				Featuring the best CSS and Flash web sites
			</em>
		</li>
		<li>
			<a href="#">Senior Developer</a>
			<em style="display: none; top: -85px;">
				Blog and design portfolio of WDW designer, Nick La
			</em>
		</li>
	</ul>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".menu a").hover(function(){
				$(this).next("em").animate({opacity: "show", top: "-75"}, "slow");
			}, function(){
				$(this).next("em").animate({opacity: "hide", top: "-85"}, "fast");
			});
		});

	</script>



</body>
</html>