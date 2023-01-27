<?php
use \Core\HTML\BootstrapForm;
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->delete($_POST['id']);



header('Location:admin.php');
    // header('Location:../pages/posts/show.php');
}
   



