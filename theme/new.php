<?php /*
Шаблон создания новой статьи
============================
$title - заголовок
$content - содержание
$error - ошибка юзера
*/?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP уровень 2 - новая статья</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
	<h1>PHP Уровень 2</h1>
	<br>
	<a href="index.php">Главная</a> | <a href="editor.php">Консоль редактора</a>
	<hr>
	<h2>Новая статья</h2>
	<?php if ($error): ?>
		<b style="color:red">Заполните все поля!</b>
	<?php endif; ?>
	<form method="post">
		Название<sup style="color:red">*</sup>: <br>
		<input type="text" name="title" value="<?php echo $title ?>">
		<br><br>
		Содержание: <br>
		<textarea name="content"><?php echo $content?></textarea>
		<br>
		<input type="submit" value="Добавить">
	</form>
	<hr>
	<small><a href="http://geekbrains.ru">Школа программирования &copy;</a></small>
</body>
</html>