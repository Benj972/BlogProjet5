<?php ob_start(); ?> 

<div class="article">

<?php

  echo '<p>Par <em>', $article->auteur(), '</em>, le ', $article->dateAjout()->format('d/m/Y à H\hi'), '</p>', "\n",
       '<h3>', $article->titre(), '</h3>', "\n",
       '<h5>', $article->chapo(), '</h5>', "\n",
       '<p>', nl2br($article->contenu()), '</p>', "\n";


?>


<a href="index.php"> <p><em>Retour à la liste d'articles</em></p></a>

</div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
