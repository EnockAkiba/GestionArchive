<?php  require_once '../../vues/include/messagerie/header.php' ;
?>
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
<main>
       
       <div class="container message">
         <table>
          
       <?php 

                $destinateur=$_GET['destinateur'];
                  $dest=recuperId("idAgent='$destinateur' ");
                  ?>
             <?php
             foreach($dest as $data){
        
                    ?>
                <div class="item">
                  <h4>
                     
                    <a href=""> <i class="fa fa-user"></i>
                     <?= $data['noms'];?>
                     </a>
                  </h4>
                  </div>
                    <?php
                    }
                      $message=recuperMessage("Message.idAgent='$destinateur' and Message.destinateur='$idAgent' ");
                        foreach($message as $data){
                    ?>
                  <div class="content">
                          <?= $contenu=$data['contenu']." => LUI"; ?>
                     </div> <br>
                        <?php
                        }
                                    $message=recuperMessage("Message.idAgent='$idAgent' and Message.destinateur='$destinateur' ");
                                    foreach($message as $data){
                        ?>
                              <div class="content">
                          <?= $contenu=$data['contenu']. " =>MOI" ; ?>
                     </div>  <br>
                      <?php
                                    }
                    ?>
            
       </div>

       </table>

       <!-- <div class="container message">
       <?php 
                  $message=recuperMessage("Agent.idAgent='$idAgent' and Message.destinateur='$destinateur' ");
                  ?>
             <?php
             foreach($message as $data){
                $destinateur=$data['destinateur'];
                   $des=recuperId("idAgent='$destinateur'");
                   foreach($des as $dat){
                    ?>
                <div class="item">
                  <h4>
                     
                    <a href=""> <i class="fa fa-user"></i>
                     <?= $data['noms'];?>
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
                    
         
       </div>    <form action="" method="post" class="absolute">
                      <button type="submit" name="ok" class="btn btn-primary"> ECRIRE UN MESSAGE</button>
                </form> -->
</main>
<?php 
//  if(isset($_POST['ok'])){ 
  ?>
  <!-- <div class="container fo">
       <form action="" method="post">
              <h2>ECRIRE UN MESSAGE <span> <a href="" class="btn btn-danger">X</a></span></h2> <hr>
            <input type="hidden" name="destinateur" id=""  value="<?=$_GET['destinateur'] ?>">
            <input type="hidden" name="idAgent" id=""  value="<?=$idAgent ?>">
           <div class="items"><textarea name="contenu" id=""class="form-control texta"></textarea> </div>    
               <button type="submit"  class="btn btn-warning bt" name="submit"> ENVOYER</button>
       </form>
  </div> -->
  <?php 
  // } 
  ?>
<style>
    h2{
        text-align: right;
        margin-right: 70px;
    }
    span{
        color: darkblue;
        
    }
    main{
        display: flex;
        width: 80%;
        margin: auto;
    }
    .message{
        /* width: 65%; */
        position: relative;
    }
    .absolute{
        position: fixed;
        bottom: 10px;
        right: 13%;
    }
    .fo{
        position: absolute;
        top: 20%;
        right: 30%;
        padding: 10px;
        width: 45%;
        background: white;
        box-shadow: 1px 1px  2px 2px gray;
        border-radius: 5px;
        height: 580px;
    }
    .items{
        width: 99%;
        margin: 0 10px ;
    }
    .texta{
        height: 430px;
        margin: 10px;
        width: 95%;
        resize: none;
    }
    .bt{
        margin: 0 20px;
    }
    .content{
     background: rgba(0, 0, 0, 0.11);
      display: inline-block;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 1px 1px  2px 2px gray;
      margin: 5px;
    }
</style>