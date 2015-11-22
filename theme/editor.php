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

	<ul>
		<li><b><a href="../new.php">Новая статья</a></b></li><br>
		<?php foreach ($articles_all as $article): ?>
			<?php for($i=0; $i<count($article); $i++): ?>
			<li><a href="edit.php?id=<?php echo $article["$i"]['id'] ?>"><?php echo $article["$i"]['name'] ?></a></li>
		<?php endfor ?>
		<?php endforeach ?>
	</ul>
	<hr>
