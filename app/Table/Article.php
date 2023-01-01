<?php 
namespace App\Table;

class Article{

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