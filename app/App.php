<?php    
    namespace App;

    class App{

        public $title ="Mon super site";
        private static $_instance;

        private static function getInstance(){
           if (is_null($_instance)) {

             self::$_instance = new App();
           }
           return self::$_instance;
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