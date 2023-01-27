<?php
use \Core\HTML\BootstrapForm;
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'],[
    'titre'=> $_POST['titre'],
    'contenu'=> $_POST['contenu'],
    'id_cat'=> $_POST['id_cat']
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
    <?= $form->select('id_cat','Catégorie',$categories);?>
    
    <?= $form->input('titre','Titre de l\'article');?>
   
    <?= $form->input('contenu','Contenu',['type'=>'textarea']);?>
   
    <?= $form->submit();?>
    
   
  


</form>
