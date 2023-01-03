<?php 

$post = App\App::getDb()->prepare('SELECT * FROM articles WHERE id =?',[$_GET['id']],'App\Table\Article',true);


?>


<h1><?= $post->titre;  ?></h1>

<p><?= $post->contenu;  ?></p>





<div class="mb-5">
      <a href="index.php?p=home" class="btn btn-primary btn-lg px-4">Home</a>
    </div>