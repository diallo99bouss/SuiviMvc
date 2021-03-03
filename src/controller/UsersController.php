<?php
namespace src\controller;
use libs\system\Controller;
use src\model\UsersDb;

class UsersController extends Controller
{
        public function __construct()
        {
            super::__construct();
        }
       public function add($user)
        {
           
            return $this->view->load("users/indexUser");
        }
         // supprimer un produit
        public function delete($id)
        {
            return $this->view->load("users/delete");
        }
         // Modifier un produit
        public function update($id)
        {
           return $this->view->load("users/update");
         }
       
        public function getAll()
        {
            $users_dao = new UsersDb();
            $users = $users_dao->findAll();
            return $this->view->load("users/getAll",$users);
        }
    }
?>
