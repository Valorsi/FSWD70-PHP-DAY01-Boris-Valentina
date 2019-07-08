<!DOCTYPE html>
<html>
<head>
	<title>
	Exercise 1
	</title>
	<link rel="stylesheet" type="text/css" href="ex1.css">
</head>
<body>

	<?php 

$poke = array(
"umbreon" => array(
"img" => "img/umbreon.gif",
"name" => "Umbreon",
"type" => "Dark",
"abilities" => "Synchronize"
),
"ninetales" => array(
"img" => "img/ninetales.gif",
"name" => "Ninetales",
"type" => "Fire",
"abilities" => "Sunny Day"
),
"slowbro" => array(
"img" => "img/slowbro.gif",
"name" => "Slowbro",
"type" => "Water/Psychic",
"abilities" => "Regenerator"
),
"venusaur" => array(
"img" => "img/venusaur.gif",
"name" => "Venusaur",
"type" => "Grass/Poison",
"abilities" => "Overgrowth"
),
"heracross" => array(
"img" => "img/heracross.gif",
"name" => "Heracross",
"type" => "Bug/Fighting",
"abilities" => "Moxie"
),
"altaria" => array(
"img" => "img/altaria.gif",
"name" => "Altaria",
"type" => "Dragon/Flying",
"abilities" => "Cloud Nine"
))


foreach ($poke as $value)
	echo "<div class='poke'>"
	echo "<p>Name :" .$value['name'] "</p><br>"
	echo "<img src='" .$value['img'] "'><br>"
	echo "<p>Type:" .$value['type'] "</p><br>"
	echo "<p>Ability:" .$value['abilities'] "</p><br><br>"
	echo "</div>" 
	
		


	?>

</body>
</html>