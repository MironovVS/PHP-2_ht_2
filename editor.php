<?php

require_once('startup.php');
require_once('model.php');

// подключаемся к БД
startup();

// извлекаем все статьи
$articles = articles_all();

// кодировку
header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/editor.php');