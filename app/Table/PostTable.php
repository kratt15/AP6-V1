<?php 
 namespace App\Table;

    use \Core\Table\Table;

    class PostTable  extends Table {

       protected $table = 'articles';
        /**
         * Recupere les dernieres articles
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
          /**
         * Recupere les dernieres articles de la categorie 
         * @param $id_cat int
         * @return  array
         */
        public function lastByCategory($category_id){
            
            return $this->query(" 
            SELECT  articles.id, articles.titre ,articles.dateArticle, articles.contenu ,categories.titre as categorie 
            FROM articles  
            LEFT JOIN categories
            ON articles.id_cat = categories.id_cat
            WHERE articles.id_cat = ?
            ORDER BY articles.dateArticle DESC",[$category_id]);

            
            // return $this->query("
            // SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
            // FROM articles  
            // LEFT JOIN categories
            // ON articles.id_cat = categories.id_cat
            // WHERE articles.id_cat = ?
            // ORDER BY articles.dateArticle DESC",[$category_id]);
            
        }


         /**
         * Recupere les dernieres article en liant la catégorie associés
         * @param $id int
         * @return  App\Entity\PostEntity
   
         */
        public function find($id){
            return $this->query(" SELECT  articles.id, articles.titre ,articles.dateArticle, articles.contenu ,categories.titre as categorie 
            FROM articles  
            LEFT JOIN categories
            ON articles.id_cat = categories.id_cat

            WHERE articles.id = ? ",[$id],true);
        }


    }

    // return self::query("
    // SELECT  articles.id, articles.titre , articles.contenu ,categories.titre as categorie 
    // FROM articles  
    // LEFT JOIN categories
    // ON articles.id_cat = categories.id_cat
    //      ",) -->



    //      <!-- SELECT articles.id, articles.titre , articles.dateArticle ,articles.contenu, categories.titre as categorie 
    //      From articles
    //      LEFT JOIN categories ON articles.id_cat = categories.id_cat
    //      ORDER BY articles.dateArticle DESC"





?>

