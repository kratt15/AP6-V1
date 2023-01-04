<?php 
namespace App\Table;
use App\App;

class Categorie  extends Table {
    
    protected static $table ='categories';

  
    // public function __get($key){
         
    //     $method = 'get'. ucfirst($key);

    //     $this->$key =$this->$method();

    //     return $this->$key;
    // }

    public function getUrl(){
        return 'index.php?p=categorie&id='.$this->id_cat;
    
     }
      
}
?>