<?php
$pdo = new PDO("mysql:host=localhost;dbname=omiyage;charset=utf8", "root", "");
$sql = "SELECT * FROM review";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
// HTML出力用の変数 $view を宣言
$view = "";

// $view に表示する文字列を追記していく

foreach($results as $row) {
//	var_dump($row);
	$view .= "<article class='omi-list'>";
	$view .= "<a href=itemdetail.php?id=" . $row["id"] . ">";
	$view .= "<div class ='text-content'>";
	$view .= "<div class='itemlist-title'>" . $row["title"] . "</div>";
	$view .= "<ul>";
	$view .= "<li class='tag'>";
	$view .=  "#"  . $row["tag"] ;
	$view .= "</li>";
	$view .= "</ul>";
	/*$view .= "<h2>" . $row["product_name"] . "</h2>";*/
	/*$view .= "<p>" . $row["comment"] . "</p>";*/
	$view .= "<p>"  . "user:" ." " . $row["user_id"] . "</p>";
	$view .= "</div>";

	$view .= "</a>";
	$view .= "</article>";
}
// table閉じタグで終了

$pdo = null;
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
<div class="">
	<ul class="tab">
		<li class="active"><a href="#">会社用</a></li>
		<li><a href="#">自分用</a></li>
	</ul>
</div>



<div id="tab1">
	<ul>
		<li>
			<article class="omi-list">
				<div class="img-content">
					<a href="itemdetail_01.html">
						<img src="img/item-haruna-01.png" alt="" width="116px"/>
				</div>

				<div class="text-content">
					<div class="itemlist-title">たからくじがあたるとの噂の梅饅頭</div>
					<!--					<p>水琴窟の前にあるお土産屋さんで「梅饅頭」を買って願掛けを...</p>-->
					<ul class="itemlist-tag">
						<!--<li class="tag"><a href="">#群馬県 	<small>6,344件</small></a></li>-->
						<li class="tag"><a href="">#榛名神社 	<small>923件</small></a></li>
						<!--						<li class="tag"><a href="">#梅饅頭 	<small>223件</small></a></li>-->
						<!--<li class="tag"><a href="">#旅がらす 	<small>96件</small></a></li>
						<li class="tag"><a href="">#地酒榛名山 	<small>75件</small></a></li>
						<li class="tag"><a href="">#チーズケーキファーム 	<small>68件</small></a></li>
						<li class="tag"><a href="">#かいこの王国 	<small>55件</small></a></li>-->
					</ul>
					<!--<div class="fav">お気に入り</div>-->
					<div class="">職場での人気度:★★★☆☆</div>
					<div class="id-name">ID:うめちゃん</div>
					<!--<div class="place">群馬県 榛名神社</div>-->
					<!--<div class="report">おみレポ数:128</div>-->
					<!--<div class="text-sub regist-date">2015/12/12</div>-->
				</div>
				</a>
			</article>
		</li>

	</ul>
</div>

<p>php</p>
<?php echo $view ?>
<?php include("footer.php"); ?>
</body>
</html>


