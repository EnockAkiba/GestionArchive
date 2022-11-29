<?php
   foreach($organisation_modifier as $data){
                $id=$data['idOrg'];
                $designation=$data['designation'];
                $contact=$data['contact'];
                $adresse=$data['adresse'];
                
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for="">NOM DE L'ORGANISATION</label>
                     <input type="text" name="designation" id="" class="form-control" value="<?= $designation ?>">
                </div>
              
                <div class="item">
                    <label for="">ADRESSE</label>
                     <input type="text" name="adresse" id="" class="form-control" value="<?= $adresse ?>">
                </div>
            </div>

            <div class="group-form items">
    
                  <div class="item">
                      <label for="">CONTACT</label>                    
                        <input type="text" name="contact" maxlength="10" class="form-control" value="<?= $contact ?>">
                  </div>

                  </div>
 <div class="btns">
    <div class="save">
     <button type="submit" name="modifier_homme"class="btn btn-success"> MODIFIER</button>
     </div>
     <div class="save">
     <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
     </div>
      <div class="<?= isset($erreur)?'erreur':'' ?> ">
         <?= isset($erreur)?$erreur:''  ?> 
      </div>
        </div>          
</form>
