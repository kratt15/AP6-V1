<?php
use \Core\HTML\BootstrapForm;
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'],[
    'titre'=> $_POST['titre'],
    'contenu'=> $_POST['contenu'],
    // 'id_cjat'=> $_POST['categorie']
 ]);

if($result){


    ?>  
    <div class="alert alert-success">
        Modification reuissi ✅
    </div>
    
    
    <?php
    // header('Location:../pages/posts/show.php');
}
   
}


$post = $postTable->find($_GET['id']);
// var_dump($post);
$categories = App::getInstance()->getTable('Category')->extraire('id_cat','titre');

$form = new BootstrapForm($post);
// var_dump($form);

?>

<form  method="post">
   
    <?= $form->input('titre','Tire de l\'article');?>
   
    <?= $form->input('contenu','Contenu',['type'=>'textarea']);?>
    <?= $form->select('categorie','Contenu',$categories);?>
    <?= $form->submit();?>
    
   
  


</form>
