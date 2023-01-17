<?php 
 namespace App\Table;

    use \Core\Table\Table;

    class PostTable  extends Table {

        /**
         * Recupere les dernieres article
         * @return  array
         */
        public function last(){
            return $this->query(" SELECT  articles.id, articles.titre ,articles.dateArticle, articles.contenu ,categories.titre as categorie 
            FROM articles  
            LEFT JOIN categories
            ON articles.id_cat = categories.id_cat
            ORDER BY articles.dateArticle DESC"
           );
        }

    }

?>

<!-- return self::query("
        SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
        FROM articles  
        LEFT JOIN categories
        ON articles.id_cat = categories.id_cat
             ",) -->



             <!-- SELECT articles.id, articles.titre , articles.dateArticle ,articles.contenu, categories.titre as categorie 
             From articles
             LEFT JOIN categories ON articles.id_cat = categories.id_cat
             ORDER BY articles.dateArticle DESC" -->