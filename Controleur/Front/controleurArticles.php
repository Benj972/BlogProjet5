<?
require_once'Modele/Article.php';
require_once'Modele/ArticleManager.php';


	class controleurArticles{
		
	private $article;

    public function __construct() {
    $this->article = new Article();
    }	

	public function articles()
	{
	$db = Modele::getMysqlConnexionWithPDO();
	$manager = new ArticleManager($db);
 	$listearticle = $manager->getList(0, 5);
 	$nbArt = $manager->count(); 
    $limite = 5;
    $nbPage = ceil($nbArt/$limite);	
	require 'Vue/vueArticles.php';
	}

	public function article($id)
	{
	$db = Modele::getMysqlConnexionWithPDO();
	$manager = new ArticleManager($db);
	$article = $manager->getUnique((int) $_GET['id']);
	require 'Vue/vueArticle.php';
	}


	}
	
