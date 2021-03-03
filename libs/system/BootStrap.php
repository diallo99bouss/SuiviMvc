<?php
namespace libs\system;
    class BootStrap
    {
        public function __construct()
        {
           //echo "<br> ".$_GET["url"]."<br>";
            if(isset($_GET["url"]))
            {
               $url = explode("/", $_GET["url"]);
               $controller_file = "src/controller/".$url[0]."Controller.php";
               echo "<br>controller: ".$controller_file."<br>";
               if(file_exists($controller_file))
               {
                   require_once $controller_file;
                   $file = $url[0]."Controller";
                   
                   $controller_object = new $file();
                   print_r($controller_object);
                   //$controller_object = new UsersController();
                   echo "On est la";
                   
                   if(isset($url[2]))
                   {
                        $method = $url[1];
                        if(method_exists( $controller_object , $method))
                        {
                             $controller_object->$method($url[2]);
                        }else
                        {
                            die($method." n'existe pas dans le controller".$file);
                        }
                   }
                   else if(isset($url[1])){
                       $method = $url[1];
                       echo "<br> Method: ".$method."<br>";
                       if(method_exists( $controller_object , $method))
                       {
                            $controller_object->$method();
                       }else{
                           die($method." n'existe pas dans le controller".$file);
                       }
                       

                   }

               }else{
                   die($controller_file."n'existe pas");
               }
            } else
            {
              echo "MVC";;
            }

        }
    }
?>