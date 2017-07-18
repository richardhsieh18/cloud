<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php 

	$row0 = array(75,54);
	$row1 = array(41,36);
	$row2 = array(99,87);

	$grades = array($row0,$row1,$row2);

	$grades[1][0] = 50;

	$total = 0;

	foreach ($grades as $matrix1) {
		$sum = 0;
		foreach ($matrix1 as $element) {
			print $element . "<br/>";
			$sum += $element;
			$total += $element;
		}
		print "個人小計:" . $sum . '<hr/>';
	}
	print "總計:" . $total;

/*
	for ($i=0;$i < count($grades);$i++){
		$sum = 0;
		for ($j = 0;$j<count($grades[$i]);$j++){
			$total += $grades[$i][$j];
			$sum += $grades[$i][$j];
			print $grades[$i][$j] . " ";

		}
		print "個人小計:" . $sum . '<hr/>';
	}
	print "總計:" . $total;
			
*/

 ?>
</body>
</html>