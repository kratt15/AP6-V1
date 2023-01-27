<?php
use \Core\HTML\BootstrapForm;
$categorieTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $categorieTable->update_cat($_GET['id'],[
    'titre'=> $_POST['titre'] 
 ]);

if($result){


    ?>  
    <div class="alert alert-success">
        Modification reuissi ✅
    </div>
    
    
    <?php

header('Location: admin.php?p=categories.home');
    
}
   
}


$categories = $categorieTable->find($_GET['id']);
// var_dump($post);

$form = new BootstrapForm($categories);
// var_dump($form);

?>

<form  method="post">
   
    
    <?= $form->input('titre','Titre de la categorie');?>
   
   
    <?= $form->submit();?>
    
   
  


</form>
