<?php
        if(isset($_POST['connexion'])){
            require_once 'modele/bdd/pdo.php';
              $username=$_POST['username'];
              $password=$_POST['password'];
               if(!empty($username) && !empty($password)){
                     $sql="SELECT idAgent from Agent where userName= ? and `passWord`=? limit 1";
                     $sql=$pdo->prepare($sql);
                     $sql->execute([$username,$password]);
                      if(count($tab=$sql->fetchAll(PDO::FETCH_ASSOC))==1){
                        $sql="SELECT fonction from Agent where userName= ? and `passWord`=?";
                        $sql=$pdo->prepare($sql);
                        $sql->execute([$username,$password]);
                        $tab=$sql->fetchAll(PDO::FETCH_ASSOC);
                          foreach($tab as $data){
                            $fonction=$data['fonction'];
                          };
                            session_start();
                            $_SESSION['fonction']=$fonction;
                             if($_SESSION['fonction']=='admin' ){
                              header("location:controller/dashbord/dashbord.php");
                             }else{
                              session_start();
                            $_SESSION['utilisateur']=$username;
                              header("location:controller/messagerie/messagerie.php");
                             }
                      }else{
                        $message="mauvais login";
                      }
               }else{
                  $message="champs laissent vide";
               }
        }
