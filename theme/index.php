<table>
  <tbody>
  <tr>
    <td>Номер</td>
    <td>Название статьи</td>
    <td>Дата создания</td>
    <td>Текст статьи</td>
    <td>Удалить</td>
  </tr>
  <?php foreach ($articles_all as $article):
    for ($i = 0 ; $i < count($article); $i++):?>
      <tr>
        <td><?php echo $article["$i"]['id']?></td>
        <td><?php echo $article["$i"]['name']?></a></td>
        <td><?php echo $article["$i"]['date']?></td>
        <td><?php echo $article["$i"]['content']?></td>
        <td><a href="delete.php?id=<?php echo $article["$i"]['id']?>">Удалить</a></td>
      </tr>
    <?php endfor; ?>
  <?php endforeach;?>
  </tbody>
</table>
<footer>
  <a href="new.php">Добавить статью</a>
</footer>