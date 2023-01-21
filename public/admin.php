<?php 
use Core\Auth\DBAuth;
  define('ROOT',dirname(__DIR__));

    require ROOT.'/app/App.php';

    App::load();
   
    if (isset($_GET['p'])){

        $p =$_GET['p'];

    }else{

        $p ='home';

    }

    // Auth
    $app = App::getInstance();

    $auth =new DBAuth($app->getDB());

   if(!$auth->logged()){

    $auth->forbidden();

   }

    
    ob_start();

    if($p === 'home' ){

        require ROOT.'/pages/admin/posts/index.php';

    } elseif ($p ==='posts.edit')
    {
        require ROOT.'/pages/admin/posts/edit.php';
    }
    elseif ($p ==='posts.show')
    {
        require ROOT.'/pages/admin/posts/show.php';
    }
    $content = ob_get_clean();

    require ROOT.'/pages/templates/default.php';









//ancienne moyen de le faire  
// require '../app/Autoloader.php';
//     App\Autoloader::register();
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