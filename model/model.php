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
		$id_article=(int)($id_article);
		$sql="SELECT * FROM `Lesson2` WHERE `id`=$id_article";
		$request=mysqli_query(getDbConnect(),$sql);
		$search=array();
		While ($row=mysqli_fetch_assoc($request)) {
			$search[]=$row;
		}
		return array($search);
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
function articles_edit($id_article, $name, $content)
{
	//Безопасность от иньекций
	$id_article=(int)($id_article);
	$name = sql_escape($name);
	$content = sql_escape($content);

	//Запрос в бд
	$request="UPDATE `lesson2` SET `name`='$name', `content`='$content' WHERE `id`='$id_article'";
	mysqli_query(getDbConnect(),$request);
}

// удаление статьи
function articles_delete($id_article)
{
	$sql="DELETE FROM `lesson2` WHERE `id` = $id_article";
	$sql=sql_escape($sql);
	mysqli_query(getDbConnect(),$sql);

}

// короткое описание статьи
function articles_intro($article)
{
	// TODO
	// $article - это ассоциативный массив, представляющий статью
}
