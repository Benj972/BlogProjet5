<?php
require_once 'Modele/Modele.php';

class ArticleManager extends Modele
{
  /**
   * Attribut contenant l'instance représentant la BDD.
   * @type PDO
   */
  protected $db;
  
  /**
   * Constructeur étant chargé d'enregistrer l'instance de PDO dans l'attribut $db.
   * @param $db PDO Le DAO
   * @return void
   */
  public function __construct(PDO $db)
  {
    $this->db = $db;
  }
  
  /**
   * @see NewsManager::add()
   */
  protected function add(Article $article)
  {
    $requete = $this->db->prepare('INSERT INTO article(auteur, titre, chapo, contenu, dateAjout, dateModif) VALUES(:auteur, :titre, :chapo, :contenu, NOW(), NOW())');
    
    $requete->bindValue(':auteur', $article->auteur());
    $requete->bindValue(':titre', $article->titre());
    $requete->bindValue(':chapo', $article->chapo());
    $requete->bindValue(':contenu', $article->contenu());
    
    $requete->execute();
  }
  
  /**
   * @see NewsManager::count()
   */
  public function count()
  {
    return $this->db->query('SELECT COUNT(*) FROM article')->fetchColumn();
  }
  
  /**
   * @see NewsManager::delete()
   */
  public function delete($id)
  {
    $this->db->exec('DELETE FROM article WHERE id = '.(int) $id);
  }
  
  /**
   * @see NewsManager::getList()
   */
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT id, auteur, titre, chapo, contenu, dateAjout, dateModif FROM article ORDER BY id DESC';
    
    // On vérifie l'intégrité des paramètres fournis.
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
    
    $requete = $this->db->query($sql);
    $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Article');
    
    $listeArticle = $requete->fetchAll();

    // On parcourt notre liste de news pour pouvoir placer des instances de DateTicount en guise de dates d'ajout et de modification.
    foreach ($listeArticle as $article)
    {
      $article->setDateAjout(new DateTime($article->dateAjout()));
      $article->setDateModif(new DateTime($article->dateModif()));
    }
    
    $requete->closeCursor();
    
    return $listeArticle;




  }
  
  /**
   * @see NewsManager::getUnique()
   */
  public function getUnique($id)
  {
    $requete = $this->db->prepare('SELECT id, auteur, titre, chapo, contenu, dateAjout, dateModif FROM article WHERE id = :id');
    $requete->bindValue(':id', (int) $id, PDO::PARAM_INT);
    $requete->execute();
    
    $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Article');

    $article = $requete->fetch();

    $article->setDateAjout(new DateTime($article->dateAjout()));
    $article->setDateModif(new DateTime($article->dateModif()));
    
    return $article;
  }
  
  /**
   * @see NewsManager::update()
   */
  protected function update(Article $article)
  {
    $requete = $this->db->prepare('UPDATE article SET auteur = :auteur, titre = :titre, chapo = :chapo, contenu = :contenu, dateModif = NOW() WHERE id = :id');
    
    $requete->bindValue(':titre', $article->titre());
    $requete->bindValue(':chapo', $article->chapo());
    $requete->bindValue(':auteur', $article->auteur());
    $requete->bindValue(':contenu', $article->contenu());
    $requete->bindValue(':id', $article->id(), PDO::PARAM_INT);
    
    $requete->execute();
  }

  public function save(Article $article)
  {
    if ($article->isValid())
    {
      $article->isNew() ? $this->add($article) : $this->update($article);
    }
    else
    {
      throw new RuntimeException('L\'article doit être valide pour être enregistrée');
    }
  }
}
