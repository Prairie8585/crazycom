<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crazy 5</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php
		$a = 11;
	?>

	<style type="text/css">

	body{
		background: #413f3b <?php echo 'url("img/'.$a.'.jpg");'?>
		font: 98.5%/1.6 Verdana, Tahoma, sans-serif; 
		margin: 10px auto;
		width: 700px;
		color: #fff;
		h1, h2, p{ 
			color: #fff; 
		} 
		header, #wrapper .leftCol, footer { 
			margin: 20px auto; 
			width: 600px; 
		} 
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
	.pane-list{

	}
	.pane-list li{
		/*background: #000;*/
		padding: 10px 20px 10px;
		border-top: solid 1px #c4df9b;
		border-bottom: solid 1px #c4df9b;
		border-left: solid 1px #c4df9b;
		border-right: solid 1px #c4df9b;
		cursor: pointer;
	}
	.pane-list li:hover{
		background: #000;
	}

	</style>
	<script type="text/javascript">

		
	</script>

</head>
<body>

	<ul class="pane-list">
		<li>
			<h3><a href="#"></a>Airbus A340</h3>
			<p>
				Airbus A340 — далекомагістральний чотиримоторний турбореактивний широкофюзеляжний пасажирський літак, розроблений Airbus.
			</p>
		</li>
		<li>
			<h3><a href="#"></a>Boeing 747</h3>
			<p>
				Боїнг 747 — перший у світі широкофюзеляжний далекомагістральний пасажирський авіалайнер, випускається американською компанією Boeing, часто називається «Джамбо Джет» (англ. Jumbo Jet), або просто «747».
			</p>
		</li>
		<li>
			<h3><a href="#"></a>Dassault Falcon 2000</h3>
			<p>
				Dassault Falcon 2000 — двомоторний реактивний літак бізнес-класу французького виробництва компанії Dassault Aviation. Розроблений на основі більшого тримоторного літака Dassault Falcon 900.
			</p>
		</li>
		<li>
			<h3><a href="#"></a>Embraer E-Jet</h3>
			<p>
				Embraer E-Jet — сімейство двомоторних вузькофюзеляжних пасажирських літаків середньої дальності виробництва бразильської компанії Embraer. Включає в себе 4 модифікації: E-170, E-175, E-190 і E-195. 
			</p>
		</li>
		<li>
			<h3><a href="#"></a>Ford Trimotor</h3>
			<p>
				Ford Trimotor (Форд Трімотор) на прізвиськоTin Goose (англ. Бляшаний Гусак) — американський пасажирський літак, суцільнометалевий тримоторний підкісний моноплан, що виготовлявся серійно в 1927—1933 рр. компанією Генрі Форда Ford Airplane Company.
			</p>
		</li>
	</ul>

	</main> 

	<footer>
		
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".pane-list li").click(function(){
				window.location = $(this).find("a").attr("href");
				return false;
			});
		});
	</script>



</body>
</html>