<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProduitsDb;

class ProduitsController extends Controller
{
       
       public function __construct()
        {
            super::__construct();
        }
        // Ajout d'un produit
        public function add($produit)
        {
           
            return $this->view->load("produits/indexProduit");
        }
         // supprimer un produit
        public function delete($id)
        {
            return $this->view->load("produits/delete");
        }
         // Modifier un produit
        public function update($id)
        {
           return $this->view->load("produits/update");
         }
        public function getAll()
        {
            $produits_dao = new ProduitDb();
            $produits = $produits_dao->findAll();//array("ROLE_USER","ROLE_ADMIN");
            return $this->view->load("produits/getAll",$produits);
        }
    }

?>
