<?php 
  session_start();
   if(isset($_SESSION['fonction'])){
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vues/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vues/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../vues/css/style.css?t=<?=time()?>">
    <title>GESTION  ARCHIVE</title>
</head>
<label for="check" id="lbl"><i class=" fa fa-bars"></i></label>
 <input type="checkbox" name="check" id="check">
 <header>
        <div class="titre">
               <a href="../agent/agent.php"> <h2>GESTION ARCHIVE</h2></a> 
        </div>
        <nav>
               <div class="one">
               <!-- <li> <a href="../dashbord/dashbord.php">TABLEAU DE BORD</a></li> -->
                <li> <a href="../agent/agent.php">AGENT</a></li>
                <li> <a href="../organisation/organisation.php">ORGANISATION</a></li>
                <li> <a href="../site/site.php">SITE</a></li>
                <li> <a href="../rapport/rapport.php">RAPPORT</a></li>
                <li> <a href="../projet/projet.php">PROJET</a></li>
                <li> <a href="../versement/versement.php">VERSEMENT</a></li>
                <li> <a href="../affecter/affecter.php">AFFECTATION</a></li>

                </div>
                 <div class="two">
                <li> <a href="../../vues/include/deconnexion.php">DECONNEXION</a></li>  
                </div>              
        </nav>
 </header>
<?php 
}
else{
       header("location:../../index.php");
       exit;
}
?>