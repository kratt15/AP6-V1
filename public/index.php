 <?php 
  require '../app/Autoloader.php';
    App\Autoloader::register();
 
   
    $app = App\App::getInstance();

    $posts =  $app->getTable('Posts');
    $categories = $app->getTable('Categories');
   
     
    var_dump($posts->all());








//ancienne moyen de le faire  
// if (isset($_GET['p'])){
//     $p =$_GET['p'];

// }else{
//     $p ='home';
// }


// //initialisation des objets


// ob_start();
// if($p ==='home'){

//    require'../pages/home.php'; 
   
// }elseif($p==='article'){

//     require'../pages/single.php';

// }elseif($p==='categorie'){

//     require'../pages/categorie.php';

// }

// $content = ob_get_clean();

// require'../pages/templates/default.php';

//  ?>