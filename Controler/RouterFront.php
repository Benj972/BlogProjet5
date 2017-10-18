<?php
require_once 'ControlerArticles.php';
require_once 'ControlerAdmin.php';


class RouterFront {

  private $ctrlArticles;
  private $ctrlAdmin;

  public function __construct() {
    $this->ctrlArticles = new ControlerArticles();
    $this->ctrlAdmin = new ControlerAdmin();
   
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

        if ($_GET['action'] == 'administer')
          {
            $this->ctrlAdmin->administer();
          }

        if ($_GET['action'] == 'remove') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlAdmin->remove($id);
            }
          }
        }
      
        else if ($_GET['action'] == 'edit') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlAdmin->edit($id);
            }
          }
        }
      
         else if ($_GET['action'] == 'create')   
          {
              $this->ctrlAdmin->create();
          }

        
  }
        else 
          {  // aucune action définie : affichage de l'accueil
              $this->ctrlArticles->articles();
          }

          
}
}



  
