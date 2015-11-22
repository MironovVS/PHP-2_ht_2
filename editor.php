<?php

require_once('SQL/startup.php');
require_once('model/model.php');

// извлекаем все статьи
$articles_all = articles_all();

//// кодировку
//header('Content-type: text/html; charset=utf-8');

$content='theme/editor.php';

// вывод в шаблон
include('Pattern/pattern-main.php');