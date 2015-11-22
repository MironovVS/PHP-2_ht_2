<?php

include_once 'SQL/startup.php';

// список всех статей
function articles_all()
{
	// запрос
	$sql = 'SELECT * FROM `lesson2` ORDER BY `date` DESC';
	$result = mysqli_query(getDbConnect(), $sql);
	if (!$result) {
		die(mysqli_error(getDbConnect()));
	}

	// извлекаем из БД данные
	$rows = mysqli_num_rows($result);
	$articles = array();
	if (!$rows) {
		return $articles;
	}
	while ($row = mysqli_fetch_assoc($result)) {
		$articles[] = $row;
	}
	return array($articles);
}

// получить конкретную статью
function articles_get($id_article)
{
	// TODO
}

// добавить статью
function articles_new($title, $date, $content)
{
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '') {
		return false;
	}

	// Запрос
	$sql = "INSERT INTO `lesson2` (`date`, `name`,`content`) VALUES ('$date','%s', '%s')";
	$query = sprintf($sql, sql_escape($title), sql_escape($content));

	$result = mysqli_query(getDbConnect(), $query);

	if (!$result) {
		die(mysqli_error(getDbConnect()));
	}
	return true;
}

// изменить статью
function articles_edit($id_article, $title, $content)
{
	// TODO
}

// удаление статьи
function articles_delete($id_article)
{
	// TODO
}

// короткое описание статьи
function articles_intro($article)
{
	// TODO
	// $article - это ассоциативный массив, представляющий статью
}
