<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }

  require_once 'inc/db.php';

  $reqNameCategory = $pdo->prepare('SELECT * FROM category');
  $reqNameCategory->execute();
  $resNameCategory=$reqNameCategory->fetchAll();

  $reqTitleCat = $pdo->prepare('SELECT * FROM post');
  $reqTitleCat->execute();
  $resTitleCat= $reqTitleCat->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Porfolio Thomas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="inc/css/style.css" rel="stylesheet">


  </head>

  <body>

    <div class="navbar navbar-default">
      <div class="navbar-inner">
        <div class="container">
          <a class ="navbar-brand" href="index.php">Thomas <strong>Galocha</strong></a>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $resNameCategory[1]->name_category ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="1_SIO_Stage.php">Stage BTS SIO 1ère année</a></li>
                  <li><a href="">Stage BTS SIO 2ème années</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $resNameCategory[0]->name_category ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <?php foreach ($resTitleCat as $key => $value) :?>
                    <?php if ($value->id_category == 1): ?>
                      <li><a href="vue.php?id=<?= $value->id_category?>&title=<?= $value->title_post ?>"><?= $value->title_post ?></a></li>
                    <?php endif; ?>


                  <?php endforeach; ?>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $resNameCategory[2]->name_category ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="">Télégram</a></li>
                </ul>
              </li>
                <li><a target="blank" href="http://www.thomas-galocha.fr">Curriculum Vitae</a></li>
                <li><a href="cv.php">Me contacter</a></li>
                <?php if(isset($_SESSION['auth'])) :?>
                  <li><a href="editeur.php">Nouveau post</a></li>
                  <li><a href="logout.php">Déconnexion</a></li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
   </div>

<div class="container">
