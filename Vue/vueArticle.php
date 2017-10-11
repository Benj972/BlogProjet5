<?php ob_start(); ?> 

<div = class="article">

<?php

  echo '<p>Par <em>', $article->auteur(), '</em>, le ', $article->dateAjout()->format('d/m/Y à H\hi'), '</p>', "\n",
       '<h2>', $article->titre(), '</h2>', "\n",
       '<p>', nl2br($article->contenu()), '</p>', "\n";


?>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>