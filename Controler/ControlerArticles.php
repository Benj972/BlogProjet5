<?
require_once'Modele/Article.php';
require_once'Modele/ArticleManager.php';


	class ControlerArticles{
		
	

    public function __construct() {
    $this->article = new Article();
    }	

	public function articles()
	{
	$db = Modele::getMysqlConnexionWithPDO();
	$manager = new ArticleManager($db);
 	$nbArt = $manager->count(); 
    $limite = 5;
    $nbPage = ceil($nbArt/$limite);	

	if(isset($_GET['page'])) 
	{
        $pageActuelle=intval($_GET['page']);
 
        if($pageActuelle>$nbPage)
        {
          $pageActuelle=$nbPAge;
        }
	} 
	else 
	{
        $pageActuelle=1;  
	}	
	$debut=($pageActuelle-1)*$limite;
	$listearticle = $manager->getList($debut,$limite);
	require 'View/viewArticles.php';
	}

	public function article($id)
	{
	$db = Modele::getMysqlConnexionWithPDO();
	$manager = new ArticleManager($db);
	$article = $manager->getUnique((int) $_GET['id']);
	require 'View/viewArticle.php';
	}
	}
	
