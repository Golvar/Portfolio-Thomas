<?php
  require_once 'inc/header.php';
  require_once 'inc/db.php';
  $reqData = $pdo->prepare('SELECT * FROM post WHERE id_category = ? AND title_post = ?');
  $reqData->execute([$_GET['id'],$_GET['title']]);
  $contentPost = $reqData->fetch();
  echo "<h1 style='text-align:center; margin-bottom:5%;'>".$contentPost->title_post . "</h1>";
  echo $contentPost->content_post;

  require 'inc/footer.php';
 ?>
