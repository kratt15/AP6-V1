<?php
use \Core\HTML\BootstrapForm;
$categoriesTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $categoriesTable->creer([
    'titre'=> $_POST['titre']
 ]);

if($result){

// header('Location: admin.php?p=posts.edit&id='. App::getInstance()->getDb()->lastInsertId());

 header('Location: admin.php?p=categories.home');

}
   
}


// $post = $postTable->find($_GET['id']);
// var_dump($post);
$categories = App::getInstance()->getTable('Category')->extraire('id_cat','titre');

$form = new BootstrapForm($_POST);
// var_dump($form);

?>

<form  method="post">

  
    
    <?= $form->input('titre','Titre de la categorie');?>
   
    <?= $form->submit();?>
    
   
  


</form>
