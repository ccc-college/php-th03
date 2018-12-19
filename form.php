<html>
<head>
<meta charset="UTF-8">
<title>登録画面</title>
</head>
<body>
<h1>登録画面</h1>
<p>ファイルに保存します</p>
<form action="thanks.php" method="post" enctype="multipart/form-data">
	<label for="name_label">名前</label>
	<input type="text" id="name_label" name="name">
	<label for="email_label">Email</label>
	<input type="email" id="email_label" name="email">
	<input type="submit" value="登録する">
</form>
</body>
</html>
