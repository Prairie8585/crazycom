<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 6</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php
		$a = 15;
	?>

	<style type="text/css">

	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 75%/120% Verdana, Tahoma, sans-serif; 
		margin: 20px auto;
		width: 580px;
		color: #fff;
	}
	a{
		text-decoration: none;
	}
	a:visited{
		color: #fff;
	}
	a:hover{
		color: #fff;
	}
	h2 {
	font: bold 190%/100% Arial, Helvetica, sans-serif;
	margin: 0 0 .2em;
	}
	h2 em {
		font: normal 80%/100% Arial, Helvetica, sans-serif;
		color: #999999;
	}
	#largeImg {
		border: solid 1px #ccc;
		width: 550px;
		height: 400px;
		padding: 5px;
	}
	.thumbs img {
		border: solid 1px #ccc;
		width: 100px;
		height: 100px;
		padding: 4px;
	}
	.thumbs img:hover {
		border-color: #FF9900;
	}
	
	



	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>
	<h2>Illustration</h2>
	<p><img id="largeImg" src="img/img1-lg.jpg" alt="Large image" /></p>
	<p class="thumbs">
		<a href="img/img2-lg.jpg" title="Image 2"><img src="img/img2-thumb.jpg" /></a>
		<a href="img/img3-lg.jpg" title="Image 3"><img src="img/img3-thumb.jpg" /></a>
		<a href="img/img4-lg.jpg" title="Image 4"><img src="img/img4-thumb.jpg" /></a>
		<a href="img/img5-lg.jpg" title="Image 5"><img src="img/img5-thumb.jpg" /></a>
		<a href="img/img6-lg.jpg" title="Image 6"><img src="img/img6-thumb.jpg" /></a>
	</p>


	<script type="text/javascript">
		$(document).ready(function(){
			$("h2").append('<em></em>');
			$(".thumbs a").click(function(){
				var largePath = $(this).attr("href");
				var largeAlt = $(this).attr("title");
				$("#largeImg").attr({src: largePath, alt: largeAlt});
				$("h2 em").html(" ("+ largeAlt + ")");
				return false;
			});
		});
		
	</script>



</body>
</html>