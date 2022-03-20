<!DOCTYPE html>
<?php
$cookie_name = "user";
setcookie($cookie_name, '1');
?>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>s462088</title>
		<link rel="stylesheet" href="dcba.css">
		<link rel="icon" type="image/png" href="res\surfin_bird.jpg">
	</head>
	<body>
		<div class= "kolor">
			<header>
				<h1>Joey Doesn't Share Food</h1>
			</header>
			<section>
			<div id="obrazek">
				<img src="res\joey.jpg"></img>
				<div id="tekst">
				<?php
					if(isset($_COOKIE[$cookie_name])) 
					{
						 echo "s462088";
						 setcookie($cookie_name, "", time() - 3600);
					} 
					else 
					{
						echo "Bartosz Jackowiak";
					}
				?>
				</div>
				<div id="tekst2">
					<span>YOU</span>
				</div>
			</div>
			</section>
			<footer>
				<h2><a href="index.html">Powrót</a></h2>
			</footer>
		</div>
	</body>
</html>