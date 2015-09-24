<?php
// day表示用の変数を定義
$view1 = "";
// DB接続
$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
//今日の日付だけ表示
$today = "SELECT DATE(NOW())";
$sql = "SELECT article_id, title, text, author, img, DATE_FORMAT(delivery_date , '%Y.%m.%d') AS delivery_date FROM article WHERE delivery_date = current_date ";
//var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$pdo = null;
//var_dump($results);
foreach($results as $row){
	//var_dump($row);
	$view1 .= '<p>' . $row["delivery_date"] .' / '. $row["author"] . '</p>';
	$view1 .= '<h4>' . $row["title"] . '</h4>';
	//$view1 .= '<img src="'. $row["img"] .'">';
	$view1 .= '<p>' . $row["text"] . '</p>';
}
?>
<?php
// week表示用の変数を定義
$view2 = "";
// DB接続
$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");

//前日まで表示
$sql = "SELECT article_id, title, text, overview, author,DATE_FORMAT(delivery_date , '%Y.%m.%d') AS delivery_date FROM article WHERE delivery_date between current_date + interval -7 day and current_date + interval -1 day";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$pdo = null;
//var_dump($results);
foreach($results as $row){
	$view2 .= '<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">';
	$view2 .= '<div class="mdl-card mdl-cell mdl-cell--12-col">';
	$view2 .='<div class="mdl-card__supporting-text">';
	$view2 .= '<p>' . $row["delivery_date"] .' / '. $row["author"] . '</p>';
	$view2 .= '<h4>' . $row["title"] . '</h4>';
	$view2 .= '<p>' . $row["overview"] . '</p>';
	$view2 .= '</div>';
	$view2 .='<div class="mdl-card__actions">';
	$view2 .='<a href="#" class="mdl-button">つづきを読む</a>';
	$view2 .= '</div>';
	$view2 .= '</div>';
	$view2 .= '</section>';
}
?>

<?php include("header.php") ?>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
	<div class="mdl-layout--large-screen-only mdl-layout__header-row">
	</div>
	<div class="mdl-layout--large-screen-only mdl-layout__header-row">
		<h3>朝のものがたり</h3>
	</div>
	<div class="mdl-layout--large-screen-only mdl-layout__header-row">
	</div>
	<div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
		<a href="#day" class="mdl-layout__tab is-active">today</a>
		<a href="#archive" class="mdl-layout__tab">week</a>
		<a href="#login" class="mdl-layout__tab">login</a>
		<!--<a href="#register" class="mdl-layout__tab">register</a>-->
<!--		<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
			<i class="material-icons" role="presentation">add</i>
			<span class="visuallyhidden">Add</span>
		</button>-->
	</div>
</header>
<main class="mdl-layout__content">
<div class="mdl-layout__tab-panel is-active" id="day">
	<section class="section--center mdl-grid mdl-grid--no-spacing">
		<div class="mdl-cell mdl-cell--12-col">
			<?php echo $view1 ?>
		</div>
	</section>
</div>
	<div class="mdl-layout__tab-panel" id="archive">
					<?php echo $view2 ?>
	</div>
	<div class="mdl-layout__tab-panel" id="login">
		<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
			<div class="mdl-card mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text">
					<h4>ログイン</h4>
					<!-- Textfield with Floating Label -->
					<form action="admin/login_execute.php" method="post">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample3" name="name"/>
							<label class="mdl-textfield__label" for="sample3">user name...</label>
						</div><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample4" name="password"/>
							<label class="mdl-textfield__label" for="sample4">password...</label>
							<span class="mdl-textfield__error"></span>
						</div><br>
						<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="ログイン"/>
					</form>
				</div>
			</div>
		</section>
	</div>
	<div class="mdl-layout__tab-panel" id="register">
		<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
			<div class="mdl-card mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text">
					<h4>登録</h4>
					<form action="" method="post">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample3" name="name"/>
							<label class="mdl-textfield__label" for="sample3">user name...</label>
						</div><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample4" name="password"/>
							<label class="mdl-textfield__label" for="sample4">password...</label>
							<span class="mdl-textfield__error"></span>
						</div><br>
						<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="登録" />
					</form>
				</div>
			</div>
		</section>
	</div>
<?php include("footer.php") ?>
</main>
</div>
<!--<a href="https://github.com/google/material-design-lite/blob/master/templates/text-only/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>-->
<script src="lib/js/material.min.js"></script>
</body>
</html>
