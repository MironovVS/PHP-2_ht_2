<?php

// подключаем библиотеки
require_once('model/model.php');


articles_delete($_GET['id']);
header('Location: index.php');
