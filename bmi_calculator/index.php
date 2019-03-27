<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Giovanni Marteli">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>BMI calculator Ajax 2</title>

	</head>
	<body>
		<div style="margin-left: 10%; margin-right: 10%; margin-top: 20px;">
<h3 id="titel">Bereken je BMI</h3>
<form id="invoer" action="index.php" method="get">
	<table>
		<tr>
			 <p class="geslachttitel">
				 Geslacht:

			<br><br></p>
				<input class="geslacht1" name="gender" type="radio" value="Man">Man</input><br><br />
				<input class="geslacht2" name="gender" type="radio" value="Vrouw">Vrouw</input><br />
				<br>
		</tr>
		<tr>
				<p class="agetitel"> Uw leeftijd:
			<td>
				<input class="typ" type="text" name="leeftijd">
				<input class="typ" type="text" name="gewicht">
				<input class="typ" type="text" name="lengte">
				<br>
			</td>
		</tr>
	</p>
		<tr>
				<p class="gewichttitel"> Uw gewicht in kg:</p>
			<td>
				<br>
			</td>
		</tr>
		<tr>
				<p class="lengtetitel">Uw lengte in cm:</p>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<button class="calculate">Bereken</button>
			</td>
		</tr>

	</table>

<p class="resultaten">Resultaten:</p>

<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte"];

	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		//afronden op 1 decimaal
		$BMI = round($gewicht / ($lengte / 100 * $lengte / 100), 1);
		//centimeter -> meter
		$lengte = $lengte / 100;

		echo "uw gewicht is: " . $gewicht . " kg.<br>";
		echo "uw lengte is: " . $lengte . " m<br>";
		echo 'uw BMI is: '. $BMI . '<br>';

		switch (true) {
				case ($BMI < 18.5):
					echo '<p style="color: #aed8d2;font-weight: bold;" >U heeft onder gewicht</p>';
					break;
				case ($BMI < 24.9):
					echo '<p style="color: #9ce657;font-weight: bold;">U heeft een normaal gewicht</p>';
					break;
				case ($BMI < 29.9):
					echo '<p style="color: #fffda6;font-weight: bold;">U heeft overgewicht</p>';
					break;
				case ($BMI < 34.9):
					echo '<p style="color: #FCDB01;font-weight: bold;">U valt onder Obese Cat. 1</p>';
					break;
				case ($BMI < 39.9):
					echo '<p style="color: #F68D33;font-weight: bold;">U valt onder Obese Cat. 2</p>';
					break;
				case ($BMI < 40):
					echo '<p style="color: red;font-weight: bold;">U valt onder Obese Cat. 3</p>';
					break;
				case ($BMI > 40):
					echo '<p style="color: red;;font-weight: bold;">U valt onder Obese Cat. 3</p>';
					break;
			}
		}

?>

			<br><br>

			<a class="reset" href="index.html">Opnieuw</a>

		</div>
	</form>
	</div>
	</body>
</html>
