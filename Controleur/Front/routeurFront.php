<?php
require_once 'controleurArticles.php';
require_once 'controleurAdmin.php';
class routeurFront {

  private $ctrlArticles;
  private $ctrlAdmin;

  public function __construct() {
    $this->ctrlArticles = new controleurArticles();
    $this->ctrlAdmin = new controleurAdmin();
  }

  // Traite une requête entrante
  public function routerRequete() {
    
       if (isset($_GET['action'])) {
        if ($_GET['action'] == 'article') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlArticles->article($id);
            }
            else
              throw new Exception("Identifiant de billet non valide");
          }
          
        else
          throw new Exception("Action non valide");
      }
    }

      else {  // aucune action définie : affichage de l'accueil
        $this->ctrlArticles->articles();
      }

      if (isset($_GET['action'])){
      if ($_GET['action'] == 'accueil')
      {
        $this->ctrlAdmin->accueil();
      }

        if ($_GET['action'] == 'supprimer') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlAdmin->supprimer($id);
            }
      }
      }
      
        else if ($_GET['action'] == 'modifier') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlAdmin->modifier($id);
            }
      }
      }
      
         else if ($_GET['action'] == 'ajouter')   
        {
           $this->ctrlAdmin->ajouter();
        }
      }
  
}
}

  