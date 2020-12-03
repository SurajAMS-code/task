<!DOCTYPE html>
<html>
<head>
	<title>Server</title>
</head>
<body>
	<form action="" method="get">
	no. of breads, no. of vadas and no. of samosas(Enter values in same sequence with space)<input type="text" name="n"><br>
	Price of Vadapav & price of Samosapav(Enter the space between two values)<input type="text" name="p">
	<input type="submit" name="submit">
	</form>
</body>
</body>
</html>
<?php
$n = $_GET['n'];
$p = $_GET['p'];
$nn = explode(" ",$n);
$pp = explode(" ",$p);
$breads = $nn[0];
$vadas = $nn[1];
$samosas = $nn[2];
$price_vadapav = $pp[0];
$price_samosa = $pp[1];
$profit=0;
if ($price_vadapav < $price_samosa) {
	for ($i=$samosas; $i > 0 && $breads>1; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_samosa;
	}
	for ($i=$vadas; $i > 0 && $breads>1; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_vadapav;
	}
}
elseif ($price_vadapav > $price_samosa) {
	for ($i=$vadas; $i > 0 && $breads>1; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_vadapav;
	}
	for ($i=$samosas; $i > 0 && $breads>1; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_samosa;
	}
}
elseif ($price_vadapav = $price_samosa) {
	for ($i=$samosas; $i > 0 && $breads>1 ; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_samosa;
	}
	for ($i=$vadas; $i > 0 && $breads>1; $i--) { 
		$breads=$breads-2;
		$profit=$profit+$price_vadapav;
	}
}
echo $profit;
?>