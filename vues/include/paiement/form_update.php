<?php
   foreach($homme_modifier as $data){
                $id=$data['NumcarteHomme'];
                $NomHomme=$data['NomHomme'];
                $ProfessionHomme=$data['ProfessionHomme'];
                $photoHomme=$data['photoHomme'];
                $AgeHomme=$data['AgeHomme'];
                $AdressHomme=$data['AdressHomme'];
                $PhoneHomme=$data['PhoneHomme'];
                $VillageOrigHomme=$data['VillageOrigHomme'];
                $TerritOrigHomme=$data['TerritOrigHomme'];
                $ProvinceHomme=$data['ProvinceHomme'];
                $nationaliteHomme=$data['nationaliteHomme'];
                $NomPere=$data['NomPere'];
                $NomMere=$data['NomMere'];
                
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                    <label for="">NOM</label>
                     <input type="text" name="NomHomme" id="" class="form-control" value="<?= $NomHomme ?>">
                </div>
              
                <div class="item">
                    <label for="">PROFESSION</label>
                     <input type="text" name="ProfessionHomme" id="" class="form-control" value="<?= $ProfessionHomme ?>">
                </div>

                <div class="item">
                      <label for="">AJOUTER UNE PHOTO</label>
                      <input type="file" name="photoHomme" id=""  class="form-control"  value="<?= $photoHomme ?>">
                  </div>
                
                  <div class="item">
                  <label for="">DATE DE NAISSANCE</label>
                      <input type="date" name="AgeHomme" maxlength="3"  class="form-control" value="<?= $AgeHomme ?>">
                  </div>
            </div>

            <div class="group-form items">
    
          

                  <div class="item">
                      <label for="">ADRESSE</label>
                      <input type="text" name="AdressHomme" id="" class="form-control" value="<?= $AdressHomme ?>">
                  </div>


                  <div class="item">
                      <label for="">TELEPHONE</label>                    
                        <input type="number" name="PhoneHomme" maxlength="10" class="form-control" value="<?= $PhoneHomme ?>">
                  </div>

                  <div class="item">
                      <label for="">VILLAGE D'ORIGINE</label>
                      <input type="text" name="VillageOrigHomme" id="" class="form-control" value="<?= $VillageOrigHomme ?>">
                  </div>

                  <div class="item">
                      <label for="">TERRITOIRE D'ORIGINE</label>
                      <input type="text" name="TerritOrigHomme" id="" class="form-control" value="<?= $TerritOrigHomme ?>">
                  </div>
             </div>

             <div class="group-form items">

                      <div class="item">
                          <label for=""> PROVINCE</label>
                          <input type="text" name="ProvinceHomme" id="" class="form-control" value="<?= $ProvinceHomme ?>">
                      </div>

                      <div class="item">
                      <label for="">NATIONALITE</label>
                      <select name="nationaliteHomme" id="" class="form-control">
                         <option value="congolaise">congolaise</option>
                      </select>
                  </div>

                  <div class="item">
                          <label for="">NOM PERE</label>
                          <input type="text" name="NomPere" id="" class="form-control" value="<?= $NomPere ?>">
                      </div>
                    
                      <div class="item">
                      <label for="">NOM DE LA MERE </label>
                      <input type="text" name="NomMere" id="" class="form-control" value="<?= $NomMere ?>">
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
