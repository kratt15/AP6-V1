<?php 
// use App\App;
use \App\Table\Categorie;
use \App\Table\Article;


$post = App\App::getDb()->prepare('SELECT * FROM articles WHERE id =?',[$_GET['id']],'App\Table\Article',true);

if($post === false){

  App::notFound();
}
App\App::setTitle($post->titre);

 $categorie = Categorie::find($post->id_cat);


?>


<h1><?= $post->titre;  ?></h1>

<p><em><?= $categorie->titre; ?></em></p>

<p><?= $post->contenu;  ?></p>





<div class="mb-5">
      <a href="index.php?p=home" class="btn btn-primary btn-lg px-4">Home</a>
    </div><?php 

