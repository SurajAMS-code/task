<!DOCTYPE html>
<html>
<head>
	<title>Server</title>
</head>
<body>
	<form action="" method="get">
	No of Servers<input type="text" name="n"><br>
	Server load every minute(Use Space after each value)<input type="text" name="l">
	<input type="submit" name="submit">
	</form>
</body>
</body>
</html>
<?php
$N = $_GET['n'];
$l = $_GET['l'];
$lm = explode(" ",$l);
$i=0;
for ($i=0;$i<sizeof($lm);$i++) { 
	if ($lm[$i]<50) {
		$N=$N/2;
	}
	else {
		$N=2*$N+1;
	}
}
print intval($N);
?>