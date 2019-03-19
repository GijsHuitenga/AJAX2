
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Gijs Huitenga">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>AJAX2 | BMI calulator</title>
		<style>
			
			a.refresh {
				padding: 8px 16px;
				text-decoration: none;
				background-color: #407de1;
				color: white;
			}

			a.refresh:hover {
				padding: 8px 16px;
				text-decoration: none;
				background-color: #333;
				color: white;
			}

		</style>
	</head>
	<body>
		<header>
			<h2>AJAX2</h2>
		</header>
		<ul>
			<li><a class="active" href="index.html">BMI calculator</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<div style="margin-left: 17%;margin-top: 20px;">

			<?php

			if ($_SERVER['REQUEST_METHOD'] == "GET") {
				print("<hr/><br/>");
				$bmi = "";
				$kwadraat = "";
				$gewicht = $_GET["gewicht"];
				$lengte = $_GET["lengte"];
				if ($gewicht <= 0) {
					print("<font color='red'><b>Gewicht moet groter zijn dan 0!</b></font>");
				}
				if ($lengte <= 0) {
					print("<font color='red'><b>Lengte moet groter zijn dan 0!</b></font>");
				}
				else {
					$lengte = $lengte / 100;
					$kwadraat = $lengte * $lengte;
					$bmi = $gewicht / $kwadraat;
					$bmi = round($bmi);
					echo "Uw BMI bedraagt: " . $bmi . "<br>";
					if ($bmi <= 18) {
						echo "<b style='color: blue;'>U lijdt aan ondergewicht!</b>";
					}
					if ($bmi > 18 AND $bmi <= 25) {
						echo "<b style='color: green;'>U heeft een gezond gewicht!</b>";
					}
					if ($bmi > 25 AND $bmi <= 27) {
						echo "<b style='color: purple;'>U heeft een licht overgewicht!</b>";
					}
					if ($bmi > 27 AND $bmi <= 30) {
						echo "<b style='color: yellow;'>U heeft een matig overgewicht!</b>";
					}
					if ($bmi > 30 AND $bmi <= 40) {
						echo "<b style='color: orange;'>U heeft een ernstig overgewicht!</b>";
					}
					if ($bmi > 40 AND $bmi <=60) {
						echo "<b style='color: red;'>U heeft een ziekelijk overgewicht!</b>";
					}
					if ($bmi > 60) {
						echo "<b style='color: grey;'>Neem snel contact op met uw begrafenis ondernemer!</b>";
					}
				}
			}

			?>

			<br><br>

			<a class="refresh" href="index.html">Refresh</a>

		</div>
	</body>
</html>
