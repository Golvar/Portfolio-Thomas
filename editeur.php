<?php
session_start();
if(empty($_SESSION['auth']->id_admin)){
  $_SESSION['flash']['danger']= "Vous n'avez pas accés à cette page !";
  header('Location: login.php');
  }
require_once "inc/header.php";
require_once 'inc/db.php';
$reqCategory = $pdo->prepare('SELECT * FROM category');
$reqCategory->execute();
$categories = $reqCategory->fetchAll();
$title ="";
if($_GET['value']=='newpost'){
  $article = 'Nouvel';
  if (!empty($_POST['editor2'])) {
    $reqpost= $pdo->prepare('INSERT INTO post SET title_post = ?, content_post = ?, id_admin=?, id_category=?');
    $reqpost->execute([$_POST['title'], $_POST['editor2'], $_SESSION['auth']->id_admin, $_POST['category']]);
      $_SESSION['flash']['success'] = 'Le post :<strong> ' .$_POST['title'] .  ' </strong>a bien été crée !';
  }
}elseif ($_GET['value']=='modifpost') {
  $article = 'Modifier';
  $reqpostexist = $pdo->prepare('SELECT * FROM post');
  $reqpostexist->execute();
  $allArticles = $reqpostexist->fetchAll();
  if (!empty($_POST['editor2']) && empty($_POST['btnmodifpost'])) {
    $reqpost= $pdo->prepare('UPDATE post SET title_post = ?, content_post = ?, id_admin=?, id_category=? WHERE id_post = ?');
    $reqpost->execute([$_POST['title'], $_POST['editor2'], $_SESSION['auth']->id_admin, $_POST['category'], $_SESSION['idpost']]);
    unset($_SESSION['idpost']);
    $_SESSION['flash']['success'] = 'Le post : '.$_POST['title'] . ' a bien été modifié !';
  }
  if(!empty($_POST['btnmodifpost'])){
    $reqpostamodif = $pdo->prepare('SELECT * FROM post WHERE id_post = ?');
    $reqpostamodif->execute([$_POST['articleAModifer']]);
    $datapost= $reqpostamodif->fetch();
    $title = $datapost->title_post;
    $_SESSION['idpost'] = $datapost->id_post;
  }
}

 ?>
<head>
	<script src="ckeditor/ckeditor.js">
  </script>
</head>

<?php if(isset($_SESSION['flash'])): ?>
  <?php  foreach($_SESSION['flash'] as $type => $message): ?>
    <div class="alert alert-<?= $type ?>" >
      <?= $message; ?>
    </div>
  <?php endforeach; ?>
<?php unset($_SESSION['flash']); ?>
<?php endif; ?>

<body>
<h1 style="text-align:center;" ><?= $article ?> article </h1> <br>
  <form method="post">

    <?php if($_GET['value']=='modifpost'): ?>
      <p>Article à modifier :
        <select name="articleAModifer">
          <?php foreach ($allArticles as $key=>$value):?>
            <option value=<?= $value->id_post?>><?= $value->title_post ?></option>"
          <?php endforeach;?>
        </select>
        <button  name="btnmodifpost" value=1 class="btn btn-primary btn-sm">Selectionner</button>
      </p>
    <?php endif; ?>

    <p>Catégorie de l'article :
    <select name='category'>
      <?php foreach ($categories as $key=>$value):?>
        <option value=<?= $value->id_category?>><?= $value->name_category ?></option>"
      <?php endforeach;?>
    </select>
    </p>
    <p>Nom de l'article : <input type="text" name="title" class="form-control" value='<?= $title; ?>'></input></p>
      <textarea cols="80" id="editor2" name="editor2" rows="10" >
        <?php if(!empty($_POST['btnmodifpost'])): ?>
            <?= $datapost->content_post; ?>
        <?php endif; ?>
      </textarea>


  	<script>
  		CKEDITOR.replace( 'editor2', {
  			height: 260,
  			/* Default CKEditor styles are included as well to avoid copying default styles. */
  			contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/full-all/contents.css', 'https://sdk.ckeditor.com/samples/assets/css/classic.css' ]
  		} );
  	</script>
    </br>

    <p>
      <button  name="newpost" class="btn btn-primary" >Envoyer</button>
    </p>

  </form>
</body>
</html>

<?php require 'inc/footer.php'; ?>
