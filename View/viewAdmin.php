<?php ob_start(); ?> 


<div class="admin">

  <form method="post" action="index.php?action=ajouter" >
      <p style="text-align: center">
 
<?php
if (isset($message))
  {
    echo $message, '<br />';
  }
?>
        <?php if (isset($erreurs) && in_array(Article::AUTEUR_INVALIDE, $erreurs)) echo 'L\'auteur est invalide.<br />'; ?>
        Auteur : <input type="text" name="auteur" value="<?php if (isset($article)) echo $article->auteur(); ?>" /><br />
        
        <?php if (isset($erreurs) && in_array(Article::TITRE_INVALIDE, $erreurs)) echo 'Le titre est invalide.<br />'; ?>
        Titre : <input type="text" name="titre" value="<?php if (isset($article)) echo $article->titre(); ?>" /><br />

        <?php if (isset($erreurs) && in_array(Article::CHAPO_INVALIDE, $erreurs)) echo 'Le chapo est invalide.<br />'; ?>
        Chapo :<br /><textarea rows="4" cols="30" name="chapo"><?php if (isset($article)) echo $article->chapo(); ?></textarea><br />
        
        <?php if (isset($erreurs) && in_array(Article::CONTENU_INVALIDE, $erreurs)) echo 'Le contenu est invalide.<br />'; ?>
      
        Contenu :<br /><textarea rows="8" cols="60" name="contenu"><?php if (isset($article)) echo $article->contenu(); ?></textarea><br />
<?php
if(isset($article) && !$article->isNew())
{
?>
        <input type="hidden" name="id" value="<?= $article->id() ?>" />
        <input type="submit" value="Modifier" name="modifier" />
<?php
}

else
{
?>
        <input type="submit" value="Ajouter" />
<?        
}
?>

    </p>
  </form>



 <p style="text-align: center">Il y a actuellement <?= $manager->count() ?> articles. En voici la liste :</p>  
 <table>
      <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
<?
  foreach ($listearticle as $article)
  {
  echo '<tr><td>', $article->auteur(), '</td><td>', $article->titre(), '</td><td>', $article->dateAjout()->format('d/m/Y à H\hi'), '</td><td>', ($article->dateAjout() == $article->dateModif() ? '-' : $article->dateModif()->format('d/m/Y à H\hi')), '</td><td><a href="index.php?action=modifier&id=', $article->id(), '">Modifier</a> | <a href="index.php?action=supprimer&id=', $article->id(), '">Supprimer</a></td></tr>', "\n";
  }  
?>

  </table>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
