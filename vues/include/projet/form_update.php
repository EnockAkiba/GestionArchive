<?php
   foreach($site_modifier as $data){
                $id=$data['idPro'];
                $designation=$data['designation'];
                $dureeExec=$data['dureeExec'];
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for="">NOM DU PEOJET</label>
                     <input type="text" name="designation" id="" class="form-control" value="<?= $designation?>">
                </div>

                </div>
        
            <div class="group-form items">
    
          

                  <div class="item">
                      <label for="">DUREE D'EXECUTION</label>
                      <input type="text" name="dureeExec" id="" class="form-control" value="<?= $dureeExec?>">
                  </div>

                  </div>

                <div class="btns">
                    <div class="save">
                    <button type="submit" name="modifier_site"class="btn btn-success"> MODIFIER</button>
                    </div>
                    <div class="save">
                    <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                    </div>
                    <div class="<?= isset($erreur)?'erreur':'' ?> ">
                        <?= isset($erreur)?$erreur:''  ?> 
                    </div>
                        </div>          
                </form>
