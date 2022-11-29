<?php
   foreach($versement_modifier as $data){
    $idOrg=$data['idOrg'];
    $montantLet=$data['montantLet'];
  $montantChif=$data['montantChif'];
   $motifVers=$data['motifVers'];
                
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for="">NOM DE L'ORGANISATION</label>
                        <select name="idOrg" id="" class="form-control">
                        <option value="<?= $idOrg?>">selectionner une organisation</option>
                             <?php  
                              $org=recupererOrg();
                              foreach($org as $data){
                             ?>
                             <option value="<?= $data['idOrg'] ?>"><?= $data['designation'] ?> </option>
                             <?php } ?>
                        </select>
                </div>
              
                <div class="item">
                    <label for="">MONTANT EN LETTRE</label>
                     <input type="text" name="montantLet" id="" class="form-control" value="<?= $montantLet ?>">
                </div>
            </div>

            <div class="group-form items">
    
                  <div class="item">
                      <label for="">MONTANT EN CHIFFRE</label>                    
                        <input type="text" name="montantChif" class="form-control" value="<?= $montantChif ?>">
                  </div>

                  <div class="item">
                      <label for="">MOTIF DE VERSEMENT</label>                    
                        <input type="text" name="motifVers"  class="form-control" value="<?= $motifVers ?>">
                  </div>

                  </div>
 <div class="btns">
    <div class="save">
     <button type="submit" name="modifier_versement"class="btn btn-success"> MODIFIER</button>
     </div>
     <div class="save">
     <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
     </div>
      <div class="<?= isset($erreur)?'erreur':'' ?> ">
         <?= isset($erreur)?$erreur:''  ?> 
      </div>
        </div>          
</form>
