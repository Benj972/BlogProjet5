
<?php

require_once 'Modele/Article.php';
require_once 'Modele/ArticleManager.php';

class controleurAdmin{

    private $article;
    
    public function __construct() {
    $this->article = new Article();
    } 

    public function accueil()
    {
    $db = Modele::getMysqlConnexionWithPDO();
    $manager = new ArticleManager($db);
    $listearticle = $manager->getList();    
    require 'Vue/vueAdmin.php';
    }

    public function modifier($id){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);
        $article = $manager->getUnique((int) $_GET['id']);
        require 'Vue/vueAdmin.php';
    }

    public function supprimer($id){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);
        $manager->delete((int) $_GET['id']);
        $listearticle = $manager->getList();
        $message = 'L\'article a bien été supprimée !';
        require 'Vue/vueAdmin.php';
    }

    public function ajouter(){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);

        if (isset($_POST['auteur']))
        {
          $article = new Article(
          [
            'auteur' => $_POST['auteur'],
            'titre' => $_POST['titre'],
            'chapo' => $_POST ['chapo'],
            'contenu' => $_POST['contenu']
          ]
      );
  
        if (isset($_POST['id']))
        {
          $article->setId($_POST['id']);
        }
  
        if ($article->isValid())
        {
          $manager->save($article);
          $message = $article->isNew() ? 'L\'article a bien été ajoutée !' : 'L\' a bien été modifiée !';
        }

        else
        {
          $erreurs = $article->erreurs();
        }

      }
}
}
