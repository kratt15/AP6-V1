<?php 
// use App\App;

$app = App::getInstance();
/**on recupère les contenu des articles dans la base de données
 * 
 */
$post = $app->getTable('Post')->find($_GET['id']);


  if($post === false){

  $app->notFound();
}

  $app->title = $post->titre;

//   $app->setTitle($post->titre);

//  $categorie = Categorie::find($post->id_cat);


?>


<h1><?= $post->titre;  ?></h1>

<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->contenu;  ?></p>





<div class="mb-5">
      <a href="index.php?p=home" class="btn btn-primary btn-lg px-4">Home</a>
    </div><?php 

