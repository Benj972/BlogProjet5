<?php ob_start(); ?> 


<div class="articles">

<?php

	foreach($listearticle as $article)
{
      
  echo '<h4><a href="index.php?action=article&id=', $article->id(), '">', $article->titre(), '</a></h4>', "\n",
       '<h5>',  nl2br($article->chapo()), '</h5>',
       '<p>Mis à jour ', $article->dateModif()->format('d/m/Y à H\hi'), '</p>';
} 

for ($i = 1 ; $i <= $nbPage; $i++)
{
   echo '<a href="index.php?action='.$i.'">', $i ,'</a>/';
}

?>

<a href="<?= "index.php?action=accueil"?>"> <p>Admin</p></a>

</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>