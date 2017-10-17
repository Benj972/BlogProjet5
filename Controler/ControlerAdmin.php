
<?php

require_once 'Modele/Article.php';
require_once 'Modele/ArticleManager.php';

class ControlerAdmin{

   
    
    public function __construct() {
    
    $this->article = new Article();
    } 

    public function accueil()
    {
    $db = Modele::getMysqlConnexionWithPDO();
    $manager = new ArticleManager($db);
    $listearticle = $manager->getList();    
    require 'View/viewAdmin.php';
    }

    public function modifier($id){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);
        $article = $manager->getUnique($id);
        $listearticle = $manager->getList(); 
        require 'View/viewAdmin.php';
    }

    public function supprimer($id){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);
        $manager->delete($id);
        $listearticle = $manager->getList();
        $message = 'L\'article a bien été supprimée !';
        require 'View/viewAdmin.php';
    }

    public function ajouter(){

        $db = Modele::getMysqlConnexionWithPDO();
        $manager = new ArticleManager($db);
        $listearticle = $manager->getList();
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
          $message = $article->isNew() ? 'L\'article a bien été ajoutée !' : 'L\' article a bien été modifiée !';
        }

        else
        {
          $erreurs = $article->erreurs();
        }

      }

      require 'View/viewAdmin.php';
}

    public function mail(){
    if (isset($_POST["name"])){

    if(empty($_POST['name'])        ||
    empty($_POST['email'])       ||
    empty($_POST['phone'])       ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
      echo "Message non envoyé. Veuillez remplir le formulaire";
      return false;
    }
    
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    // Create the email and send the message
    $to = 'ben.gallot@hotmail.fr'; 
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\n"; 
    $headers .= "Reply-To: $email"; 
    mail($to,$email_subject,$email_body,$headers);
          
    {
      echo $envoi ='<a href="index.php?action=mail"> Message bien envoyé. Retournez sur le site</a>';
      return true;
    }
    
  }
    require 'View/viewContactForm.php';
}
   
}
