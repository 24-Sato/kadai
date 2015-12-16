<?php
// detail表示用の変数を定義
$id = $_GET["id"];
$view = "";
// DB接続
$pdo = new PDO("mysql:host=localhost;dbname=omiyage;charset=utf8", "root", "");
$sql = "SELECT * FROM review WHERE id = {$id}";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
/*var_dump($results);*/
$pdo = null;

foreach($results as $row);
$view .= "<div class='itemdetail-title'>" . "title:" ." ". $row["title"] ."</div>";
$view .= "<div class='itemdetail-title'>" . "product:" ." ". $row["product_name"] ."</div>";
$view .= "<div>" . "comment:" ."</div>";
$view .= "<p>" . $row["comment"] ."</p>";
$view .= "<p>" . "user:" ." ". $row["user_id"] ."</p>";
?>




<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<title>OMI Check</title>
	<!-- Custom styles for this template -->
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php include("header.php"); ?>


<?php echo $view ?>
<?php include("footer.php"); ?>
</body>
</html>


