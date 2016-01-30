<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dropping menu</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('#wrapper ul li').hover(
			        function() {
			            $(this).addClass("active");
			            $(this).find('ul').stop(true, true);
			            $(this).find('ul').slideDown();
			        },
			        function() {
			            $(this).removeClass("active");
			            $(this).find('ul').slideUp('fast');
			        }
    			);
			})
		</script>

		<style type="text/css">
			body{
				margin: 0 auto;
				padding: 0;
				width: 520px;
				font: 75%/120% Arial, Helvetica, sans-serif;
			}
			a:focus{
				outline: none;
			}
			#wrapper ul, #wrapper ul li{
				margin: 0;
				padding: 0;
				display: inline;
				margin-right: 2px;
			}
			#wrapper ul li{
				float: left;
				position: relative;
				width: 120px;
			}
			#wrapper ul li a{
				display: block;
				padding: 10px 10px 10px 30px;
				margin: 1px 0px;
				color: #0f0;
				text-decoration: none;
				border: 1px solid #999;
				background: url("img/window.gif") no-repeat 10px center;
				white-space: nowrap;
			}
			#wrapper ul li a:hover{
				color: #00c;
			}
			#wrapper ul li ul{
				display: none;
				position: absolute;
				top: 36px;
			}
			#wrapper ul li ul li{
				display: block;
				border-top: 0px;
			}
			.active{
				background-color: #eee;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<ul>
				<li><a href="#">SUPER MENU</a>
					<ul>
						<li>
							<a href="#">Element #1</a>
						</li>
						<li>
							<a href="#">Element #2</a>
						</li>
						<li>
							<a href="#">Element #3</a>
						</li>
						<li>
							<a href="#">Element #4</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</body>
</html>