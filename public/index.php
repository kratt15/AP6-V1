 <?php 
 use App\Controller\PostsController;

  define('ROOT',dirname(__DIR__));

    require ROOT.'/app/App.php';

    App::load();
   
    if (isset($_GET['p'])){

        $page =$_GET['p'];

    }else{

        $page ='posts.index';

    }
            $page = explode('.',$page);
            if($page[0]=='admin'){

                $controller ='\App\Controller\Admin\\'.ucfirst($page[1]).'Controller';
                $action =$page[2];
            } else{

                $controller ='\App\Controller\\'.ucfirst($page[0]).'Controller';
                $action =$page[1];

            }

            $controller = new $controller();

            $controller->$action();

    

   

























































    // // ob_start();

    // if($p === 'home' ){

    //     $controller = new PostsController();
    //     $controller->index(); 

    // } elseif ($p ==='posts.category')
    // {
    //     $controller = new PostsController();
    //     $controller->category(); 
    // }
    // elseif ($p ==='posts.show')
    // {
    //     $controller = new PostsController();
    //     $controller->show(); 
    // }
    // elseif ($p ==='login')
    // {
    //     $controller = new \App\Controller\UsersController();
    //     $controller->login();
    //  }
    // elseif($p === 'admin.posts.index' ){

    //     $controller = new \App\Controller\Admin\PostsController();
    //     $controller->index();
    // }

     // // $content = ob_get_clean();

    // require ROOT.'/pages/templates/default.php';


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