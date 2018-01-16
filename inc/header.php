<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
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
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Expériences Professionnelles<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="1_SIO_Stage.php">Stage BTS SIO 1ère année</a></li>
                  <li><a href="">Stage BTS SIO 2ème années</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mes Projets<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="">Golf de la Wantzenau</a></li>
                  <li><a href="">Site des pompiers de Hoenheim</a></li>
                  <li><a href="">Géstionnaire de régate</a></li>
                  <li><a href="">Jeu du master-mind</a></li>
                  <li><a href="">Générateur de mot de passe</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Veille juridique<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="">Télégram</a></li>
                </ul>
              </li>
                <li><a target="blank" href="http://www.thomas-galocha.fr">Curriculum Vitae</a></li>
                <li><a href="cv.php">Me contacter</a></li>
            </ul>
          </div>
        </div>
      </div>
   </div>

<div class="container">
