<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>s462088</title>
		<link rel="stylesheet" href="srednia.css">
		<link rel="icon" type="image/png" href="res\surfin_bird.jpg">
		<script>
			function validateForm() {
			  var x = document.forms["myForm"]["username"].value;
			  if (x == "") {
				alert("Musisz podać imie!");
				return false;
			  }
			}
		</script>
		<script>
			function validateForm2() {
			  var x = document.forms["myForm2"]["number"].value;
			  if (x == "") {
				alert("Musisz podać cyfre!");
				return false;
			  }
			}
		</script>
	</head>
	<body>
		<div class= "kolor">
			<header>
				<h1>Cześć
				<?php
					if (isset($_POST['username']))
					{
						setcookie("uzytkownik", $_POST['username']);
						echo $_POST['username']."</header>";
						echo "</h1><section>
													<div id=\"lewa\">
														<h2>Wpisz liczbe <br> od 1 do 9</h2>
														<form name=\"myForm2\" action=\"srednia.php\" onsubmit=\"return validateForm2()\" method=\"post\">
														<input type=\"number\" name=\"number\" placeholder=\"X\" autocomplete=\"off\" class=\"form-control\" min=\"1\" max=\"9\"/><br />
														<input type=\"submit\" name=\"submit\" value=\"Prześlij!\" />
														</form>
													</div>
													<div id=\"prawa\">
														<img src=\"\res\karol.jpg\"</img>
													</div>
													<div id=\"suma\">
														<h2>Suma: ";
														if (isset($_POST['number']))
														{
															setcookie("suma", $_POST['number']);
															if (isset($_COOKIE['suma']))
															{
																$_COOKIE['suma']=$_COOKIE['suma']+$_POST['number'];
																echo $_COOKIE['suma'];
																setcookie("suma", $_COOKIE['suma']);
															}
															else
																echo $_POST['number'];
														}
														elseif (isset($_COOKIE['suma']))
														{
															echo $_COOKIE['suma'];
														}
														else
															echo 0;
														
														echo "</h2></div>";
														echo "<div id=\"srednia\">
														<h2>Średnia: ";
														if (isset($_POST['number']))
														{
															if (isset($_COOKIE['ilewejsc']))
															{
																$_COOKIE['ilewejsc']=$_COOKIE['ilewejsc']+1;
																setcookie("ilewejsc", $_COOKIE['ilewejsc']);
															}
															else
															{
																setcookie("ilewejsc", '1');
															}
															setcookie("srednia", $_POST['number']);
															if (isset($_COOKIE['srednia']))
															{
																$_COOKIE['srednia']=$_COOKIE['srednia']+$_POST['number'];
																echo $_COOKIE['srednia']/$_COOKIE['ilewejsc'];
																setcookie("srednia", $_COOKIE['srednia']);
															}
															else
																echo $_POST['number'];
														}
														elseif (isset($_COOKIE['srednia']))
														{
															if (isset($_COOKIE['srednia']))
																if ($_COOKIE['srednia']!=0)
																	echo $_COOKIE['srednia']/$_COOKIE['ilewejsc'];
																else
																	echo 0;
														}
														else
															echo 0;
														
														echo "</h2></div>";
														echo "<form action=\"srednia.php\"  method=\"post\">
																	<input type=\"submit\" name=\"guzik\" id=\"guzik\" value=\"Reset!\">
																	</form></section>";
																	
														if (isset($_POST['guzik']))
														{
															setcookie("uzytkownik", null);
															setcookie("suma", 0);
															header("Refresh:0");
														}
					}
					elseif (isset($_COOKIE['uzytkownik']))
					{
						echo $_COOKIE['uzytkownik']."</header>";
						echo "</h1><section>
													<div id=\"lewa\">
														<h2>Wpisz liczbe <br> od 1 do 9</h2>
														<form name=\"myForm2\" action=\"srednia.php\" onsubmit=\"return validateForm2()\" method=\"post\">
														<input type=\"number\" name=\"number\" placeholder=\"X\" autocomplete=\"off\" class=\"form-control\" min=\"1\" max=\"9\"/><br />
														<input type=\"submit\" name=\"submit\" value=\"Prześlij!\" />
														</form>
													</div>
													<div id=\"prawa\">
														<img src=\"karol.jpg\"</img>
													</div>
													<div id=\"suma\">
														<h2>Suma: ";
														if (isset($_POST['number']))
														{
															setcookie("suma", $_POST['number']);
															if (isset($_COOKIE['suma']))
															{
																$_COOKIE['suma']=$_COOKIE['suma']+$_POST['number'];
																echo $_COOKIE['suma'];
																setcookie("suma", $_COOKIE['suma']);
															}
															else
																echo $_POST['number'];
														}
														elseif (isset($_COOKIE['suma']))
														{
															echo $_COOKIE['suma'];
														}
														else
															echo 0;
														
														echo "</h2></div>";
														echo "<div id=\"srednia\">
														<h2>Średnia: ";
														if (isset($_POST['number']))
														{
															if (isset($_COOKIE['ilewejsc']))
															{
																$_COOKIE['ilewejsc']=$_COOKIE['ilewejsc']+1;
																setcookie("ilewejsc", $_COOKIE['ilewejsc']);
															}
															else
															{
																setcookie("ilewejsc", '1');
															}
															setcookie("srednia", $_POST['number']);
															if (isset($_COOKIE['srednia']))
															{
																$_COOKIE['srednia']=$_COOKIE['srednia']+$_POST['number'];
																echo $_COOKIE['srednia']/$_COOKIE['ilewejsc'];
																setcookie("srednia", $_COOKIE['srednia']);
															}
															else
																echo $_POST['number'];
														}
														elseif (isset($_COOKIE['srednia']))
														{
															if (isset($_COOKIE['srednia']))
																if ($_COOKIE['srednia']!=0)
																	echo $_COOKIE['srednia']/$_COOKIE['ilewejsc'];
																else
																	echo 0;
														}
														else
															echo 0;
														
														echo "</h2></div>";
														echo "<form action=\"srednia.php\"  method=\"post\">
																	<input type=\"submit\" name=\"guzik\" id=\"guzik\" value=\"Reset!\">
																	</form></section>";
																	
														if (isset($_POST['guzik']))
														{
															setcookie("uzytkownik", null);
															setcookie("suma", 0);
															setcookie("srednia", 0);
															setcookie("ilewejsc", 0);
															header("Refresh:0");
														}
					}
					else
					{
						echo "nieznajomy</h1>"."</header>";
						echo "<section id=\"glowna\">
										<form name=\"myForm\" action=\"srednia.php\" onsubmit=\"return validateForm()\" method=\"post\">
										<input type=\"text\" name=\"username\" placeholder=\"Przedstaw się\" autocomplete=\"off\"/><br />
										<input type=\"submit\" name=\"submit\" id= \"przeslij\" value=\"Prześlij!\" />
										</form>
									</section>";
					}
				?>
				</h1>
			</header>	
			<footer>
				<h2><a href="index.html">Powrót</a></h2>
			</footer>
		</div>
	</body>
</html>