<?php /*
Шаблон редактируемой страницы
==============================
$articles - список статей

статья
id_article - идентифицатор
title - заголовок
content - текст
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP уровень 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
	<h1>PHP Уровень 2</h1>
	<br>
	<a href="index.php">Главная</a> | <b>Консоль редактора</b>
	<hr>
	<ul>
		<li><b><a href="new.php">Новая статья</a></b></li>
		<?php foreach ($articles as $article): ?>
			<li><a href="edit.php?id=<?php echo $article['id_article'] ?>"><?php 
				echo $article['title'] ?></a></li>
		<?php endforeach ?>
	</ul>
	<hr>
	<small><a href="http://geekbrains.ru">Школа программирования &copy;</a></small>
</body>
</html>