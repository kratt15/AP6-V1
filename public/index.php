 <?php 
  define('ROOT',dirname(__DIR__));

    require ROOT.'/app/App.php';

    App::load();
   
    if (isset($_GET['p'])){

        $p =$_GET['p'];

    }else{

        $p ='home';

    }
    
    ob_start();

    if($p === 'home' ){

        require ROOT.'/pages/posts/home.php';

    } elseif ($p ==='posts.category')
    {
        require ROOT.'/pages/posts/category.php';
    }
    elseif ($p ==='posts.show')
    {
        require ROOT.'/pages/posts/show.php';
    }
    elseif ($p ==='login')
    {
        require ROOT.'/pages/users/login.php';
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