<?php
namespace App\Entity;
use \Core\Entity\Entity;
class CategoryEntity extends Entity{

/** permet l'id dans la base de donner a l'aide de la methode magique __get() permet de chercher ce qu'on pas definie comme variable */

    public function getUrl(){

        return 'index.php?p=posts.category&id='.$this->id_cat;
    }

   


}

?>
