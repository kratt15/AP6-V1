<?php
namespace App\Controller\Admin;
use \Core\HTML\BootstrapForm;




class PostsController extends AppController{

    public function __construct(){

        parent::__construct();
        $this->loadModel('Post');

    }




    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index',compact('posts'));
    }

    public function add(){

             
            if(!empty($_POST)){
                $result = $this->Post->creer([
                'titre'=> $_POST['titre'],
                'contenu'=> $_POST['contenu'],
                'id_cat'=> $_POST['id_cat']
            ]);
            
            if($result){
            
            // header('Location: admin.php?p=posts.edit&id='. App::getInstance()->getDb()->lastInsertId());
            
           return $this->index();
            
            }
            
            }

            
            $this->loadModel('Category');
            // $post = $postTable->find($_GET['id']);
            // var_dump($post);
            $categories = $this->Category->extraire('id_cat','titre');
            
            $form = new BootstrapForm($_POST);
            $this->render('admin.posts.edit',compact('categories','form'));
            // var_dump($form); 

     }

    public function edit(){

        $errors=false;
       
        if(!empty($_POST)){
            $result = $this->Post->update($_GET['id'],[
            'titre'=> $_POST['titre'],
            'contenu'=> $_POST['contenu'],
            'id_cat'=> $_POST['id_cat']
         ]);
        
        if($result){
        
            $errors=true;
            return $this->index();
        
            // header('Location:../pages/posts/show.php');
        }
           
        }
        
        
        $post =$this->Post->find($_GET['id']);
        // var_dump($post);
        $this->loadModel('Category');

        $categories = $this->Category->extraire('id_cat','titre');
        
        $form = new BootstrapForm($post);
        $this->render('admin.posts.edit',compact('categories','form'));
        // var_dump($form);

    }
    public function delete(){

      
        if(!empty($_POST)){
            $result = $this->Post->delete($_POST['id']);
            return $this->index();
            // header('Location:../pages/posts/show.php');
        }
           
        
    }

}


?>