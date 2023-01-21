<?php
use \Core\HTML\BootstrapForm;


$post = App::getInstance()->getTable('Post')->find($_GET['id']);

$form = new BootstrapForm($post);


?>
<form  method="post">
    <?= $form->input('titre','Tire de l\'article');?>
    <?= $form->input('contenu','Contenu',['type'=>'textarea']);?>
    <button class=" mt-3 btn btn-primary ">Enregister</button>
</form>
