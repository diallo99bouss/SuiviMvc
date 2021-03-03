<?php
 use src\controller\UsersController;
 use src\entities\User;

    require_once "config/autoload.php";
    require_once 'header.php';
    require_once 'corp.php';
    $usersdao = new UsersController();
    $user = new User();
    $user->setId(1);
    $user->setNom("Diallo");
    print_r($user);
    $usersdao->add();
   
   // $usersdao->getAll();
   
   // $mvc = new libs\system\BootStrap();
    
?>
    
<?php
   require_once 'footer.php';
  ?>