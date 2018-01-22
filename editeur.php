<?php
require_once "inc/header.php";
require_once 'inc/db.php';
$reqCategory = $pdo->prepare('SELECT * FROM category');
$reqCategory->execute();
$categories = $reqCategory->fetchAll();



if (!empty($_POST['editor2'])) {
  $reqpost= $pdo->prepare('INSERT INTO post SET title_post = ?, content_post = ?, id_admin=?, id_category=?');
  $reqpost->execute([$_POST['title'], $_POST['editor2'], $_SESSION['auth']->id_admin, $_POST['category']]);
}


 ?>
<head>

	<script src="ckeditor/ckeditor.js">
  </script>
</head>

<body>
<h1 style="text-align:center;" >Nouvel article </h1> <br>
  <form method="post">
    <p>Catégorie de l'article :
    <select name='category'>
      <?php foreach ($categories as $key=>$value):?>
        <option value=<?= $value->id_category?>><?= $value->name_category ?></option>"
      <?php endforeach;?>
    </select>
  </p>
  <p>Nom de l'article : <input type="text" name="title" class="form-control" required></p>
	<textarea cols="80" id="editor2" name="editor2" rows="10" ></textarea>

	<script>
		CKEDITOR.replace( 'editor2', {
			height: 260,
			/* Default CKEditor styles are included as well to avoid copying default styles. */
			contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/full-all/contents.css', 'https://sdk.ckeditor.com/samples/assets/css/classic.css' ]
		} );
	</script>
</br>

  <p>
    <button  name="newpost" class="btn btn-primary">Envoyer</button>
  </p>

</form>
</body>

</html>

<?php require 'inc/footer.php'; ?>
