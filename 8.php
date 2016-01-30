<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 6</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<?php
		$a = 15;
	?>

	<style type="text/css">

	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 75%/120% Verdana, Tahoma, sans-serif; 
		margin: 0 auto;
		padding: 0;
		/* width: 580px; */
	}
	.body{
		padding:0;
		border: 1px #ccc solid;
	}
	a{
		text-decoration: none;
	}
	a:focus{
		outline: none;
	}
	.left{
		float: left;
		width: 164px;
	}
	.right{
		float: right;
		width: 164px;
	}
	.panel{
		width: 0px;
		background: #ccc;
		height: 265px;
		overflow: hidden;
	}
	.left .slide{
		border-left: solid 4px #aaa;
		background: url(img/btn-slide-left.gif) no-repeat left center;
		height: 265px;
		width: 38px;
		float: left;
	}
	.left .panel{
		float: left;
	}
	.right .slide{
		border-right: solid 4px #aaa;
		background: url(img/btn-slide-right.gif) no-repeat left center;
		height: 265px;
		width: 38px;
		float: right;
	}
	.right .panel{
		float: right;
	}
	.left .btn-slide{
		background: url(img/white-arrow-hor.gif) no-repeat -45px 80px;
		text-indent: -9000%;
		display: block;
		height: 265px;
		width: 38px;
	}
	.right .btn-slide{
		background: url(img/white-arrow-hor.gif) no-repeat 15px 80px;
		text-indent: -9000%;
		display: block;
		height: 265px;
		width: 38px;
	}
	.left .active{
		background-position: 10px 80px;
	}

	.right .active{
		background-position: -45px 80px;
	}
	.panel ul {
    list-style:none;
    border-bottom:1px solid #333;
    padding:10px;
    margin:0;
}

.panel ul a{
    font-weight:bold;
    color: #333;
    white-space: nowrap;
}


	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>
	<div class="body">
		<div class="left">
			<div class="panel">
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
			</div>
			<p class="slide"><a href="#" class="btn-slide">Menu</a></p>
		</div>
		<div class="right">
			<div class="panel">
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
				<ul>
					<li><a href="#" title="element 1">Element #1</a></li>
					<li><a href="#" title="element 2">Element #2</a></li>
					<li><a href="#" title="element 3">Element #3</a></li>
				</ul>
			</div>
			<p class="slide"><a href="#" class="btn-slide">Menu</a></p>
		</div>
	</div>
	


	<script type="text/javascript">
		$(document).ready(function(){
			$(".btn-slide").toggle(function(){
				$(this).parent().parent().find(".panel").animate({"width": "+=120px"}, "slow");
				$(this).toggleClass("active");
				return false;
			}, function(){
				$(this).parent().parent().find(".panel").animate({"width": "-=120px"}, "slow");
				$(this).toggleClass("active");
				return false;
			});
		});
		
	</script>



</body>
</html>