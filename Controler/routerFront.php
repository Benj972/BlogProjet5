<?php
require_once 'controlerArticles.php';
require_once 'controlerAdmin.php';


class routerFront {

  private $ctrlArticles;
  private $ctrlAdmin;

  public function __construct() {
    $this->ctrlArticles = new controlerArticles();
    $this->ctrlAdmin = new controlerAdmin();
   
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
        }

         if ($_GET['action'] == 'mail')
          	{
              $this->ctrlAdmin->mail();
            }

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

          /*else if ($_GET['action']) == 'email')
          {
              $this->ctrlAdmin->email();
          }*/
  }
        else 
          {  // aucune action définie : affichage de l'accueil
              $this->ctrlArticles->articles();
          }

          
}
}



  
