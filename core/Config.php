<?php  
namespace Core;

class Config {
// singleton
    private $settings=[];
    private static $_instance;

    public static function getInstance($file){

        if(is_null(self::$_instance)){

            self::$_instance =new Config($file);

        }
        return self::$_instance;

    }
// fin singletton



    public function __construct($file){
        // $this->id=uniqid();
       $this->settings = require ($file);
    //    dirname (__DIR__).'/config/config.php'
    }
    public function get($key){

        if(!isset($this->settings[$key])){
            return null;
        }
        return $this->settings[$key];
    }
}


?>
