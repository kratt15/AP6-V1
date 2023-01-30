<?php
namespace App\Controller\Admin;
use \Core\HTML\BootstrapForm;




class CategoriesController extends AppController{

    public function __construct(){

        parent::__construct();
        $this->loadModel('Category');

    }




    public function index(){
       $items = $this->Category->all();
        $this->render('admin.categories.index',compact('items'));
    }

    public function add(){

             
            if(!empty($_POST)){
                $result = $this->Category->creer([
                'titre'=> $_POST['titre']
               
            ]);
            
            if($result){
            
            // header('Location: admin.php?p=posts.edit&id='. App::getInstance()->getDb()->lastInsertId());
            
           return $this->index();
            
            }
            
            }
            $form = new BootstrapForm($_POST);
            $this->render('admin.categories.edit',compact('form'));
            // var_dump($form); 

     }

    public function edit(){

        $errors=false;
       
        if(!empty($_POST)){
            $result = $this->Category->update($_GET['id'],[
            'titre'=> $_POST['titre']
         ]);
        
        if($result){
        
            $errors=true;
            return $this->index();
        
            // header('Location:../pages/posts/show.php');
        }
           
        }
        
        
        $category =$this->Category->find($_GET['id']);
        
        $form = new BootstrapForm($category);

        $this->render('admin.categories.edit',compact('form'));
        // var_dump($form);

    }
    public function delete(){

      
        if(!empty($_POST)){
            $result = $this->Category->delete_cat($_POST['id']);
            return $this->index();
        }

    }
}

?>