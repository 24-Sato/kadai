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




<div>

	<!--<div class="container">
		<div class="">ハッシュタグで絞り込む</div>
		<ul class="itemlist-tag">
			<li class="tag select"><a href="">#群馬県 	<small>36,344件</small></a></li>
			<li class="tag select"><a href="">#榛名神社 	<small>5,923件</small></a></li>
			<li class="tag"><a href="">#おみやげ 	<small>923件</small></a></li>
			<li class="tag"><a href="">#梅饅頭 	<small>123件</small></a></li>
		</ul>
	</div>-->

	<section class="container">
		<form action="post-execute.php" method="post" enctype="multipart/form-data">
			<div class="form-item">
				<div class="form-item-title">コメント：</div>
				<div class="form-item-body">
					<input type="text" name="comment" size="40" maxlength="10" value="" />
				</div>
			</div>

			<div class="form-item">
				<div class="form-item-title">画像：</div>
				<div class="form-item-body">
					<input type="file" name="file">
					<!--<input type="submit" value="アップロード" />-->
				</div>
			</div>
			<div class="form-item">
				<div class="form-item-title">ID：</div>
				<div class="form-item-body">
					<input type="text" name="user_id" size="40" value="" />
				</div>
			</div>
			<div class="form-item">
				<div class="form-item-title">tag：</div>
				<div class="form-item-body">
					<input type="text" name="user_id" size="40" value="" />
				</div>
			</div>
			<div>
				<input type="submit" value="送信"><input type="reset" value="リセット">
			</div>
		</form>
	</section>




</div>
<footer>© 2015 おみちぇっく., All Rights Reserved</footer>
</body>
</html>