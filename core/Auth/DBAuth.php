<?php 
namespace Core\Auth;
 use Core\Database\Database;
    class DBAuth
    {
        private $db;
      
        public function __construct(Database  $db){

            $this->db= $db;


        }
         public function getUserId(){
            if($this->logged()){
                return $_SESSION['auth'];
            }
            return false;
         }
        /**
         * @param $username
         * @param $password
         * @return boolean
         * 
         */

        public function login($username ,$password) {

            $user =$this->db->prepare('SELECT * FROM users WHERE username = ?',[$username],null,true);
          if ($user){
            if($user->password === sha1($password)){
                $_SESSION['auth']=$user->id;
                return true;
            }
          }
          return false;
        }

        public  function logged(){

           return isset($_SESSION['auth']);

        }
        public function forbidden(){
           header('HTTP/1.0 403 Forbidden'); 
           die('Acces interdit');
        }
        public function notfound(){
            header('HTTP/1.0 404 Found');

            die('Page introuvable');
        }

        
    }
    








?>