<?php
namespace src\model;
use libs\system\Model;

    class ProduitsDb extends Model
    {
        public function findAll()
        {
            return $this->entityManager
                        ->createQuery("SELECT p FROM Produits p")
                        ->getResult();
        }
        // Ajout d'un produit
        public function add($user)
        {
            $produit = new Produit();
            $produit->setRef('ref');
            $produit->setNom('nom');
            $produit->setQte('qte');
            $produit->setUser('user');
            $produit_dao = new ProduitDb();
            $produit = $produit_dao->add($produit);
            return $this->view->load("produits/indexProduit");
        }
         // supprimer un produit
        public function delete($id)
        {
            $produitRepo = $entityManager->getRepository(Produit::class);
            $produit = $produitRepo->find($id);
            $entityManager->remove($produit);
            $entityManager->flush($produit);
        }
         // Modifier un produit
        public function update($id)
        {
            $produit = new Produit();
            $produit->setRef('ref');
            $produit->setNom('nom');
            $produit->setQte('qte');
            $produit->setUser('user');     
            $entityManager->persist($produit);
            $entityManager->flush();
        }
    }

?>