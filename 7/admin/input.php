
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<!-- 今回は「データを登録する」なので、 post を使う -->
<form action="input_execute.php" method="post">
	タイトル: <input type="text" name="title" />
	本文: <input type="text" name="text" />
	概要: <input type="text" name="overview" />
	著者: <input type="text" name="author" />
	掲載日: <input type="text" name="delivery_date" />
	<input type="hidden" name="create_date">
	<input type="submit" />
</form>
</body>
</html>