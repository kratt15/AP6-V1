

<form  method="post">
    <?= $form->select('id_cat','Catégorie',$categories);?>
    
    <?= $form->input('titre','Titre de l\'article');?>
   
    <?= $form->input('contenu','Contenu',['type'=>'textarea']);?>
   
    <?= $form->submit();?>
    
   
  


</form>
