<!DOCTYPE html>
<?php
	require_once('constant.php');
	require_once('class/newshandler.class.php');
	$global_page = basename(__FILE__, '.php');
?>
<html>
<head>
	<?php
		include('view/title.php');
	?>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-06-06T21:15:12+0800" >
<meta name="copyright" content="XIAODONG IT Consulting">
<meta name="keywords" content="<?=$meta_keywords; ?>">
<meta name="description" content="<?=$meta_description; ?>">
<meta name="theme-color" content="#FFA366" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=1" />
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>
<body>
	<div class="container">
		<?php
			include('view/header.php');
		?>
		<?php
			include('view/navigation_bar.php');
		?>
		<div class="wrapper">
			<div class="wrapper-header">
				<?php
					switch($global_lang) {
						case EN:
							$header = "News";
							break;
						case ZH:
							$header = "最新消息";
							break;
						case CH:
							$header = "最新消息";
							break;
					}
				?>
				<h1><?= $header; ?></h1>
			</div>
			<div class="wrapper-content">
				<?php
					$handler = new newsHandler();
					$articles = $handler->getByLang($global_lang);
					foreach ($articles as $article) {
						echo "<article>";
						echo "<h3>".html_entity_decode($article["title"])."</h3>";
						echo html_entity_decode($article["content"]);
						echo "</article>";
					}
				?>
			</div>
		</div>
		<?php
			include('view/footer.php');
		?>
	</div>
</body>
</html>