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
		font: 98.5%/1.6 Verdana, Tahoma, sans-serif; 
		margin: 50px;
		width: 400px;
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
	.accordion, .accordion1{
		width: 400px;
		border-bottom: solid 1px #121212;
		float: left;
		margin-left: 5%;
	}
	.accordion h3, .accordion1 h2{
		background: #e9e7e7 url(img/arrow-square.gif) no-repeat right -51px;
		padding: 7px 15px;
		border: solid 1px #121212;
		cursor: pointer;
		background: #000;
		color: #f00;
	}
	.accordion h3:hover, .accordion1 h2:hover{
		background-color: #282828;
	}
	.accordion h3.active, .accordion1 h2.active{
		background-position: right 5px;
	}
	.accordion p{
		background: #000;
		padding: 10px 15px 20px;
		border-left: solid 1px #121212;
		border-right: solid 1px #121212;
	}
	.accordion1 h2.green{
		color: #0f0;
	}




	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>
	<div class="accordion1">
		<h2>Delete</h2>
	</div>

	<div class="accordion">
		<h3>Airbus A340</h3>
		<p>Airbus A340 — далекомагістральний чотиримоторний турбореактивний широкофюзеляжний пасажирський літак, розроблений Airbus.</p>
		<h3>Boeing 747</h3>
		<p>Боїнг 747 — перший у світі широкофюзеляжний далекомагістральний пасажирський авіалайнер, випускається американською компанією Boeing, часто називається «Джамбо Джет» (англ. Jumbo Jet), або просто «747».</p>
		<h3>Dassault Falcon 2000</h3>
		<p>Dassault Falcon 2000 — двомоторний реактивний літак бізнес-класу французького виробництва компанії Dassault Aviation. Розроблений на основі більшого тримоторного літака Dassault Falcon 900.</p>
		<h3>Embraer E-Jet</h3>
		<p>Embraer E-Jet — сімейство двомоторних вузькофюзеляжних пасажирських літаків середньої дальності виробництва бразильської компанії Embraer. Включає в себе 4 модифікації: E-170, E-175, E-190 і E-195. </p>
		<h3>Ford Trimotor</h3>
		<p>Ford Trimotor (Форд Трімотор) на прізвиськоTin Goose (англ. Бляшаний Гусак) — американський пасажирський літак, суцільнометалевий тримоторний підкісний моноплан, що виготовлявся серійно в 1927—1933 рр. компанією Генрі Форда Ford Airplane Company.</p>

	</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".accordion h3:first").addClass("active");
			$(".accordion p:not(:first)").hide();

			$(".accordion h3").click(function(){
				$(this).next("p").slideToggle("slow").siblings("p:visible").slideUp("slow");
				$(this).toggleClass("active");
				$(this).siblings("h3").removeClass("active");
			});
			$(".accordion1 h2").click(function(){
				$(this).addClass("green");
			});
		});
	</script>



</body>
</html>