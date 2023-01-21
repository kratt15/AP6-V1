<?php 
namespace Core\HTML;

class Form{

    /** Class Form
    *permet de generer une un formulaire rapidement  et simplement
    */
  
       private $data;

       public $surround = 'p';

       public function construct($data = array()){
           $this->data = $data;
       }
       protected function surround($html){
           return "<{$this->surround}>{$html}</{$this->surround}>";
       }
       protected function getValue($index){
        
        if(is_object($this->data)){
            return $this->data->$index;
        }else{
            return isset($this->data[$index]) ? $this->data[$index] : null;
        }
          
       }
   
   /**
    * @param $name
    * @param $label
    * @param array $options
    * @return string
    */
   public function input($name, $label,$options=[]){
       $type=isset($options['type']) ? $options['type'] : 'text';
       return $this->surround(
           '<input type="'.$type.'" name="'.$name.'" value="' . $this->getValue($name) . '">'
       );
   }
   
   public function submit(){
       return $this->surround('<button type="submit">Envoyer</button>');
   }

   

}



?>