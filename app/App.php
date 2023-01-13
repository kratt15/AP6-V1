<?php    
    namespace App;

    class App{

        public $title ="Mon super site";
        private $db_instance;
        private static $_instance;
        
        public static function getInstance(){
           if (is_null(self::$_instance)) {

             self::$_instance = new App();
           }
           return self::$_instance;
        }
        // factory
        public static function getTable($name){

            $class_name='\\App\\Table\\'.ucfirst($name).'Table';

            return new $class_name();
        }

        public function getDb(){

            $config = Config::getInstance();

            if (is_null($this->db_instance)){
            $this->db_instance = new Database($config->get('db_name'),$config->get('db_pass'),$config->get('db_host'))
        }

          retrun $this->db_instance;

        }  






    }




















// Ancienne façon de le faire , mais util en tous cas

    //     const DB_NAME ='blog';
    //     const DB_USER ='root';
    //     const DB_PASS ='';
    //     const DB_HOST ='localhost';

    //     private static $database;
    //     private static $title= 'Mon super site';

    //     public static function notFound(){
    
    //         header("HTTP/1.0 404 not Found");
    //         header('Location:index.php?p=404');
    //     }
         
    //     public static function  getDb(){

    //         if (self::$database === null){

    //             self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        
    //         }

    //         return self::$database;
    //     }

    //     public static function getTitle(){
    //        return self::$title; 
    //     }
    //     public static function setTitle($title){

    //        self::$title = $title;

    //     }


    // }



?>