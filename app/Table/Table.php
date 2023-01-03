<?php 
namespace App\Table;
use App\App;

class Table{

  Protected static $table;
  private static function getTable(){

    if(self::$table==null){
        
    }
    return self::$table=
  }

    public static function all(){

        return App::getDb()->query("
        SELECT  *
        FROM ".self::$table."
        
             ",__CLASS__);
    }

    public function __get($key){
         
        $method = 'get'. ucfirst($key);

        $this->$key =$this->$method();

        return $this->$key;
    }




?>