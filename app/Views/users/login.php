<?php if($errors): ?>
    
            <div class="alert alert-danger"> identifiant ou mot de passe incorrect </div>
           
<?php endif; ?>
<form  method="post">
    <?= $form->input('username','Pseudo');?>
    <?= $form->input('password','Mot de passe',['type'=>'password']);?>
    <button class=" mt-3 btn btn-primary ">Envoyer</button>
</form>
