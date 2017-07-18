<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$arr = $_GET["userinterest"];
		print_r($arr);
		print "<br/>";
		foreach ($arr as $value){
			print $value . "<br/>";

		}
	 ?>
</body>
</html>