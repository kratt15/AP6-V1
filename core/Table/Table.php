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

      return $this->query('SELECT * FROM '.$this->table);

    }

    public  function find($id){

      return $this->query("
      SELECT  *
      FROM {$this->table}
      WHERE id_cat= ?
      
           ",[$id],true);
  
  }


    public function update($id,$fields){

  $sql_parts =[];
  $attributes=[];

  foreach($fields as $k => $v){

    $sql_parts[]="$k = ?";
    $attributes[]=$v;

  }
  $attributes[]=$id;
  

 $sql_part=implode(',',$sql_parts);
 
  // die();
  return $this->query("UPDATE {$this->table} SET $sql_part WHERE id=? ",$attributes,true);

}

public function creer($fields){

  $sql_parts =[];
  $attribues=[];

  foreach($fields as $k => $v){

    $sql_parts[]="$k = ?";
    $attribues[]=$v;

  }
  
 

 $sql_part=implode(',',$sql_parts);
 
  // die();
  return $this->query("INSERT INTO {$this->table} SET $sql_part", $attribues,true);

}
  
public function delete($id,){

  
 
  // die();
  return $this->query("DELETE FROM {$this->table}  WHERE id=? ",[$id],true);

}
public function extraire($key,$value){
      $records =$this->all();
      $return=[];
      foreach($records as $v){

        $return[$v->$key] = $v->$value;

      }
      return $return;

    
}

    public function query($statement, $attributes = null ,$one = false){

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