<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php 

	$arr = array("color" => "Black","name" => "Richard", "shape" => "circle", 200);

	if (!isset($arr["type"])){
		$arr["type"] = "PHP";
		print "Add successfully<br/>";

	}
	foreach ($arr as $key => $value) {
		print "$key => $value<br/>";
	}
	
	print_r($arr);
	print("<br/>");
	unset($arr["color"]);
	print_r($arr);

 ?>
</body>
</html>