<?php 
     
     namespace Core\HTML;
     /** Class BootstrapForm
      * @package Core\HTML
      */
     class BootstrapForm extends  Form{

        protected function surround($html){
            
            return "<div class='form-group'>{$html}</div>";
        }
        

         
         public function input($name,$label,$options=[]){

             $type=isset($options['type']) ? $options['type'] : 'text';

             $label='<label>' . $label . '</label>';

             if($type ==='textarea'){

                $input= '<textarea  name="'.$name.'" class="form-control">'. $this->getValue($name).'</textarea>';
                // var_dump($this->getValue($name));
            
            }else{
                
                $input= ' <input type="'.$type.'" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">';
                // var_dump($this->getValue($name));
             }
            
             return $this->surround($label.$input);
         }

         public function select($name,$label,$options){
            $label='<label>' . $label . '</label>';

            $input ='<select class="form-control" name="'.$name.'">';
            foreach($options as $k => $v){

                $input.="<option value='$k'>$v</option>";
            }
            
            return $this->surround($label.$input);
         }

         public function submit(){
             return $this->surround('<button type="submit" class="mt-3 btn btn-primary">Envoyer</button>');
         }
     }

    
?>