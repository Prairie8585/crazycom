<!DOCTYPE html>
<html>
<head>
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
	<meta charset="utf-8">
	<title>Crazy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		$a = rand(0, 9);
	?>
	<style type="text/css">
	body{/*
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>*/
		background: url('img/9.jpg');
	}
	</style>



	<script type="text/javascript" src="js/jquery.js">
		$(document).ready(function(){
			$(".leftCol li").click(function(){
				window.location = $(this).find("a").attr("href");
				return false;
			});
		});
	</script>

</head>
<body>
	<header>
		<div id="logo">
			<div><a href="index.php" title="MAIN">Super crazy experiments</a></div>
			
		</div>
	</header>
	<div id="wrapper">
		<div class="leftCol">
			<li>
				<h3><a href="1.php">Dinamic experiment 1</a></h3>
			</li>
			<li>
				<h3><a href="2.php">Dinamic experiment 2</a></h3>
			</li>
			<li>
				<h3><a href="3.php">Dinamic experiment 3</a></h3>
			</li>
			<li>
				<h3><a href="4.php">Dinamic experiment 4</a></h3>
			</li>
			<li>
				<h3><a href="5.php">Dinamic experiment 5</a></h3>
			</li>
			<li>
				<h3><a href="6.php">Dinamic experiment 6</a></h3>
			</li>
			<li>
				<h3><a href="7.php">Dinamic experiment 7</a></h3>
			</li>
			<li>
				<h3><a href="8.php">Dinamic experiment 8</a></h3>
			</li>
			<li>
				<h3><a href="9.php">Dinamic experiment 9</a></h3>
			</li>
			<li>
				<h3><a href="10.php">Dinamic experiment (Drop-down меню)</a></h3>
			</li>
			<li>
				<h3><a href="slide-2.php">slide-2 Extra</a></h3>
			</li>
			<li>
				<h3><a href="11.php">Extra</a></h3>
			</li>

		</div>
		
	</div>
	<footer>

	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".leftCol li").click(function(){
				window.location = $(this).find("a").attr("href");
				return false;
			});
		});
	</script>
	
</body>
</html>
