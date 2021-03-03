<?php
namespace src\model;
use libs\system\Model;

    class UsersDb extends Model
    {
        public function findAll()
        {
            return $this->entityManager
                        ->createQuery("SELECT u FROM User u")
                        ->getResult();
        }

         // Ajout d'un user
        public function add($user)
        {
            var_dump ($_POST);
            $user = new User();
            $user->setNom('nom');
            $user->setPrenom('prenom');
            $user->setEmail('email');
            $user->setEmail('etat');
            $user->setEmail('password');
            $users_dao = new UsersDb();
            $users = $users_dao->add($user);
            return $this->view->load("users/indexUser");
        }

        //Supprimer un User
        public function delete($id)
        {
            $userRepo = $entityManager->getRepository(User::class);
            $user = $userRepo->find($id);
            $entityManager->remove($user);
            $entityManager->flush($user);
          
        }
         //Modifier un produit
        public function update($id)
        {
            $user = new User();
            $user->setNom('nom');
            $user->setPrenom('prenom');
            $user->setEmail('email');
            $user->setEmail('etat');
            $user->setEmail('password');
            $entityManager->persist($user);
            $entityManager->flush();
         }

      
    }

?>