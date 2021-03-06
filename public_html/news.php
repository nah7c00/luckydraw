<!DOCTYPE html>
<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
	require_once(__ROOT__.'/config/php_config.php');
	require_once(__ROOT__.'/lib/languageshandler.class.php');
	require_once(__ROOT__.'/lib/newshandler.class.php');
	$global_page = basename(__FILE__);
	require_once(__ROOT__.'/lib/locale.php');
	$lang_handler = new languagesHandler();
	$lang = $lang_handler->getShort();
?>
<html lang="<?=$global_lang; ?>">
<head>
<?php
	include_once(__ROOT__.'/config/hreflang.php');
	include_once('view/title.php');
?>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-07-26T00:23:41+0800" >
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
			include("view/header.php");
		?>
		<?php
			include("view/navigation_bar.php");
		?>
		<div class="wrapper">
			<div class="wrapper-header">
				<?php
					switch($global_lang) {
						case 'en':
							$header = "News";
							break;
						case 'zh':
							$header = "最新消息";
							break;
					}
				?>
				<h1><?= $header; ?></h1>
			</div>
			<div class="wrapper-content">
				<?php
					switch($global_lang) {
						case 'en':
							$footer = "by Lucky Draw Studio";
							break;
						case 'zh':
							$footer = "幸運抽獎工作室";
							break;
					}
					$handler = new newsHandler();
					$articles = $handler->getByLang($global_lang);
					foreach ($articles as $article) {
						echo "<article>";
						echo "<header><h3>".html_entity_decode($article["title"])."</h3></header>";
						echo html_entity_decode($article["content"]);
						echo '<footer class="article-footer">'.html_entity_decode($article["date"]). " $footer</footer>";
						echo "</article>";
					}
				?>
			</div>
		</div>
		<?php
			include("view/footer.php");
		?>
	</div>
</body>
</html>
