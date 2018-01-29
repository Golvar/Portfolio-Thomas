<?php require 'inc/header.php';
  require_once 'inc/db.php';

  $reqNewPost = $pdo->prepare('SELECT * FROM (SELECT * FROM post ORDER BY id_post DESC LIMIT 3) as posts order by id_post DESC');
  $reqNewPost->execute();
  $resNewPost = $reqNewPost->fetchAll();
?>

<div class="jumbotron" style="margin-top:21px;">
  <h1>Thomas GALOCHA</h1>
  <p>Bienvenue sur le portfolio professionnel de Thomas Galocha.</p>
  <p>J'ai 21 ans et je suis actuellement étudiant en BTS SIO
    (Services Informatiques aux Organisations). Passionné d'informatique depuis
    plusieurs années j'aimerais continuer mes études vers une licence pro et
    ainsi devenir développeur. Je vous invite à regarder mon CV pour plus d'informations. </p>
</div>
<div class="text-center">
  <h1>Les derniers articles : </h1><br />
</div>

<?php foreach ($resNewPost as $key => $value): ?>
  <?php $link = "vue.php?id=$value->id_category&title=$value->title_post"; ?>
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading"><?= $value->title_post; ?></div>
      <div class="panel-body">
        <?= substr($value->content_post,0, 200); ?>
        <div class="text-center">
          <a href="<?= $link ?>" class="btn btn-primary btn-sm">Découvrir !</a>
        </div>

      </div>
    </div>
  </div>
<?php endforeach; ?>




<?php require 'inc/footer.php'; ?>
