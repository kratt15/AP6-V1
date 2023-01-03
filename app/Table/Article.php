<?php 
namespace App\Table;
use App\App;

class Article extends Table {

    public static function getLast(){

        return App::getDb()->query("
        SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
        FROM articles  
        LEFT JOIN categories
        ON articles.id_cat = categories.id_cat
             ",__CLASS__);
    }

   

 public function getUrl(){
    return 'index.php?p=article&id='.$this->id;

 }
  public function getExtrait(){

   $html = '<p>'. substr($this->contenu,0,300) . '...</p>';

   $html .= '<p><a href="'.$this->getUrl().'">voir la suite</a> </p>';

   return $html;

  }

}


?>