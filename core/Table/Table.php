<?php 

namespace Core\Table;
use \Core\Database\Database;

  class Table{

    protected $table;
    protected $db;


    public function __construct(Database $db){

      $this->db=$db;
        // var_dump($this);
      if(is_null($this->table)){
          
       $parts = explode('\\',get_class($this));
       $class_name = end($parts);
       $this->table = strtolower(str_replace('Table','',$class_name));


      }
    }
  
    public function all(){

      return $this->db->query('SELECT * FROM articles');

    }


    public function query($statement, $attributes = null ,$one= false){

      if($attributes){
        return $this->db->prepare(
         $statement,
         $attributes,
         str_replace('Table','Entity', get_class($this)), $one);
      }
      else{
        return $this->db->query(
          $statement,
          
          str_replace('Table','Entity', get_class($this)), $one);
       }

      }
    }

  




?>