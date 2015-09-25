
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
$title   = $_POST["title"];
$text = $_POST["text"];
$overview = $_POST["overview"];
$author  = $_POST["author"];
$delivery_date = $_POST["delivery_date"];
$create_date = $_POST["create_date"];

$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
$sql = "INSERT INTO article (article_id, title, text, overview, author,delivery_date, create_date) VALUES (NULL, '" . $title . "', '" . $text . "', '" . $overview . "', '" . $author . "', sysdate(), sysdate()) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();//sqlにデータ登録
var_dump($result);
if($result) {
	echo "データが登録できました";
	echo "<a href=select.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;
?>







<p><a href="index.php">戻る</a></p>


</body>
</html>