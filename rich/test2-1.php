<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="d1fce8">
	<?php 
		print "<h1>";
		print $_GET["username"];
		print "</h1>";
		switch ($_GET["gender"]) {
			case 'male':
				print "先生您好!";
				break;
			default:
				print "女士您好";
				break;
		}
		print "<br/>";
		print "您的學歷為:" . $_GET["education"];
		print "您喜歡的活動如下:";
		print "<ul>";
		if (empty($_GET["userinterest"]))
		{
			print "";
		}else{
			foreach ($_GET["userinterest"] as $value) {
			print "<li>" . $value . "</li>";			
			}
		}
		print "</ul>";
		print "您對於使用臉書經營社群有何看法為<br>";
		print $_GET["comment"];
	 ?>
</body>
</html>