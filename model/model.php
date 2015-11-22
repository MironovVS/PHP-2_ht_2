<?php

// список всех статей
function articles_all()
{
	// запрос
	$sql = 'SELECT * FROM `articles` ORDER BY id_article DESC';
	$result = mysqli_query(getDbConnect(), $sql);
	if (!$result) {
		die(mysqli_error());
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
	return $articles;
}

// получить конкретную статью
function articles_get($id_article)
{
	// TODO
}

// добавить статью
function articles_new($title, $content)
{
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '') {
		return false;
	}

	// Запрос
	$sql = "INSERT INTO `articles` (`title`, `content`) VALUES ('%s', '%s')";
	$query = sprintf($sql, sql_escape($title), sql_escape($content));

	$result = mysqli_query(getDbConnect(), $query);

	if (!$result) {
		die(mysqli_error());
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
