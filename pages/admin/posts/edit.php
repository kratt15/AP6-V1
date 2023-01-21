<?php
use \Core\HTML\BootstrapForm;

$form = new BootstrapForm($_POST);

if(!empty($_POST)){
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'],$_POST['password'])){
        header('Location: admin.php');
    }else{

        ?>
        <div class="alert alert-danger"> identifiant incorrect </div>
       <?php
        
    }
}
 
?>
<form  method="post">
    <?= $form->input('username','Pseudo');?>
    <?= $form->input('password','Mot de passe',['type'=>'password']);?>
    <button class=" mt-3 btn btn-primary ">Envoyer</button>
</form>
