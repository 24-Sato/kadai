
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
	exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('news_app', $link);
if (!$result) {
	exit('データベースを選択できませんでしたaaaa。');
}
$result = mysql_query('SET NAMES utf8', $link);
if (!$result) {
	exit('文字コードを指定できませんでした。');
}

$title   = $_REQUEST['title'];
$text = $_REQUEST['text'];
$overview = $_REQUEST['overview'];
$author  = $_REQUEST['author'];
$delivery_date = $_REQUEST['delivery_date'];
$create_date = $_REQUEST['create_date'];

$result = mysql_query("INSERT INTO article(article_id, title, text, overview, author, delivery_date, create_date) VALUES(NULL, '$title', '$text','$overview', '$author', '$delivery_date','$create_date')", $link);
if (!$result) {
	exit('データを登録できませんでした。');
}

$pdo = mysql_close($link);
if (!$link) {
	exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="index.php">戻る</a></p>


</body>
</html>