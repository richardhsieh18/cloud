<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	if($_POST["username"] == "abc" && $_POST["passwd"] == "1234"){
		$login = "YES";

	}else{
		$login = "No";

	}
	if($login=="YES"){
		print "登入成功";
	}else{
		print "登入失敗";
	}

 ?>
	
</body>
</html>