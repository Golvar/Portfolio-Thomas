<?php
require_once "inc/header.php";
require_once 'inc/db.php';

if (!empty($_POST['newpost'])) {

  $reqpost= $pdo->prepare('INSERT INTO post SET title_post = ?, content_post = ?, id_admin=?, id_category=?');
}
 ?>
<head>

	<script src="ckeditor/ckeditor.js">
  </script>
</head>

<body>
  <?= var_dump($_POST['editor2']); ?>
<p>Nouvel article : <br>
  <form method="post">
	<textarea cols="80" id="editor2" name="editor2" rows="10" ></textarea>

	<script>
		CKEDITOR.replace( 'editor2', {
			height: 260,
			/* Default CKEditor styles are included as well to avoid copying default styles. */
			contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/full-all/contents.css', 'https://sdk.ckeditor.com/samples/assets/css/classic.css' ]
		} );
	</script>
</br>
  </p>
  <p>
    <button  name="newpost" class="btn btn-primary">Envoyer</button>
  </p>

</form>
</body>

</html>

<?php require 'inc/footer.php'; ?>
