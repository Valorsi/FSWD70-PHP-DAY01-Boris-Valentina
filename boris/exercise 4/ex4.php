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

$b = "Boris";
for ($i = 1; $i<51; $i++){
	echo "<h4> $i $b </h4>";
};

$k = 1;
while ($k<51){
	echo "<h4> $k $b </h4>";
	$k++;
}

$j = 1;
do {
	echo "<h4> $j $b </h4>";
	$j++;
} while($j <51);

	?>

</body>
</html>