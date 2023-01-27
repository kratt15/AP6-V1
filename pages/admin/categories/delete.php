<?php
use \Core\HTML\BootstrapForm;
$categoriesTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $categoriesTable->delete_cat($_POST['id']);



    header('Location: admin.php?p=categories.home');

// header('Location:admin.php');
    // header('Location:../pages/posts/show.php');
}
   



