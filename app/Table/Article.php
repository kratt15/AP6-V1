<?php 
namespace App\Table;
use App\App;

class Article extends Table {

    protected static $table ='articles';

    public static function getLast(){

        return self::query("
        SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
        FROM articles  
        LEFT JOIN categories
        ON articles.id_cat = categories.id_cat
             ",);//il y avait un true qui me posait problème
    }

   public static function lastByCategory($category_id){

    return self::query("
    SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
    FROM articles  
    LEFT JOIN categories
    ON articles.id_cat = categories.id_cat
    WHERE articles.id_cat = ?
         ",[$category_id]);
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