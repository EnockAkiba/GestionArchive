<?php  require_once '../../vues/include/messagerie/header.php' ;
?>
<main>
        <h2>AGENT : <?php 
            $utilisateur= $_SESSION['utilisateur'];
          $Agent=recuperId("userName = '$utilisateur' ") ;
           foreach($Agent as $data){
          $idAgent=$data['idAgent'];
          ?>
           <span>  <?= $noms=$data['noms']; ?></span>
            <?php
           }
          ?></h2>
       <div class="container message">
       <?php 
                  $message=recuperMessage("Message.destinateur='$idAgent'");
                  ?>
             <?php
             foreach($message as $data){
               $expediteur=$data['idAgent'];
                   $des=recuperId("idAgent='$expediteur'");
                   foreach($des as $dat){
                    ?>
                <div class="item">
                  <h4>
                    <a href="../messagerie/lecteur.php?destinateur=<?=$data['idAgent'] ?>"> <i class="fa fa-user"></i>
                     <?= $dat['noms'];?>
                     </a>
                  </h4>
                  </div>
                    <?php
                   }
                    ?>
                  <div class="content">
                          <?= $contenu=$data['contenu']; ?>
                     </div> <hr>
                      <?php
                     }
                    ?>
            
       </div>
</main>
<style>
    span{
        color: darkblue;
    }
</style>