<?php

require_once('SQL/startup.php');
require_once('model/model.php');

//// подключаемся к БД
//startup();

// Обработка отправки формы
if (isset($_POST['submit'])) {
	if ($_POST['title_art'] != "" && $_POST['content_art'] != "") {
		articles_new($_POST['title_art'], $_POST['date_art'], $_POST['content_art']);
		die(header('Location: index.php'));
	} else {
		echo "Введите название статьи";
	}
}

// Обработка отправки формы
//if (!empty($_POST) && isset($_POST['title_art']) && isset($_POST['content_art'])) {
//	// успешно данные добавлены, редирект
//	if (articles_new($_POST['title_art'],$_POST['date_art'], $_POST['content_art'])) {
//		die(header('Location: editor.php'));
//	}

$title="Добавить статью";

//// кодировку
//header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/new.php');