<?php
use \Core\HTML\BootstrapForm;
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->creer([
    'titre'=> $_POST['titre'],
    'contenu'=> $_POST['contenu'],
    'id_cat'=> $_POST['id_cat']
 ]);

if($result){

// header('Location: admin.php?p=posts.edit&id='. App::getInstance()->getDb()->lastInsertId());

header('Location: admin.php?p=home');

}
   
}


// $post = $postTable->find($_GET['id']);
// var_dump($post);
$categories = App::getInstance()->getTable('Category')->extraire('id_cat','titre');

$form = new BootstrapForm($_POST);
// var_dump($form);

?>

<form  method="post">

    <?= $form->select('id_cat','Catégories',$categories);?>
    
    <?= $form->input('titre','Titre de l\'article');?>
   
    <?= $form->input('contenu','Contenu',['type'=>'textarea']);?>
   
    <?= $form->submit();?>
    
   
  


</form>
