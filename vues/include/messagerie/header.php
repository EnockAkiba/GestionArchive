<?php 
  session_start();
   if(isset($_SESSION['utilisateur'])){
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vues/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vues/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../vues/css/messagerie.css?t=<?=time()?>">
    <title>GESTION  ARCHIVE</title>
</head>
  <header>
           <h1>MESSAGERIE</h1>
            <nav>
               <li><a href="../messagerie/messagerie.php" class="btn btn-warning">MESSAGE</a></li>
                 <li><a href="" class="btn btn-warning">RAPPORT</a></li>
                 <li><form action="" method="post">
                      <input type="search" name="" id="" class="form-control" placeholder="Rerchercher un message">
                       <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i></button>
                 </form></li>
                  <li><a href="../../vues/include/deconnexion.php" class="btn btn-danger">DECONNEXION</a></li>
            </nav>
  </header>
  <?php } ?>