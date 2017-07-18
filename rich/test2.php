<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="d1fce8">
<div style="text-align: center;">
	<img src="./profile1.jpg" alt="">
</div>
<div>
	<form action="test2-1.php" method="GET">
	<fieldset>
		<legend>個人資訊</legend>
		姓名:<input type="text" name="username"><br/>
		性別:<input type="radio" name="gender" value="male">男
		<input type="radio" name="gender" value="female">女<br>
		最高學歷: 
		<select name="education" id="">
			<option value="博士">博士</option>
			<option value="碩士">碩士</option>
			<option value="大專院校">大專院校</option>
			<option value="高中以下">高中以下</option>
		</select>

	</fieldset>
	<fieldset>
	<legend>其他資訊</legend>
		您喜歡下列哪些活動(可複選)?<input type="checkbox" name="userinterest[]" value="閱讀">閱讀
		<input type="checkbox" name="userinterest[]" value="打球">打球
		<input type="checkbox" name="userinterest[]" value="逛街">逛街
		<input type="checkbox" name="userinterest[]" value="聽音樂">聽音樂
		<input type="checkbox" name="userinterest[]" value="水上運動">水上運動
		<input type="checkbox" name="userinterest[]" value="旅行">旅行<br>
		您對於使用臉書經營社群有何看法?<br>
		<textarea name="comment" id="" cols="60" rows="10"></textarea>
	</fieldset>
		<input type="submit" value="傳送資料">
		<input type="reset" value="清除資料">

	</form>


</div>	

</body>
</html>