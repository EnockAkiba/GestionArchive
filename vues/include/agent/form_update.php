<?php
   foreach($Agent_modifier as $data){
                $id=$data['idAgent'];
                $noms=$data['noms'];
                $categorie=$data['categorie'];
                $sexe=$data['sexe'];
                $gmail=$data['gmail'];
                $adresse=$data['adresse'];
                $telephone=$data['telephone'];
                $fonction=$data['fonction'];
                $userName=$data['userName'];
                $passWord=$data['passWord'];
                
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for="">NOM </label>
                     <input type="text" name="noms" id="" class="form-control" value="<?= $noms ?>">
                </div>
              
                <div class="item">
                    <label for="">CATEGORIE</label>
                    <select name="categorie" id="" class="form-control">
                                            <option  value="<?= $categorie ?>"></option>
                                            <option value="CDI">CDI</option>
                                            <option value="CDD">CDD</option>
                                        </select>
                </div>

                <div class="item">
                                <label for="">SEXE</label>                    
                                        <select name="sexe" id="" class="form-control">
                                            <option  value="<?= $sexe ?>"></option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                            </div>
            </div>
            <div class="group-form items">
                 
                       
            <div class="item">
                
                          <label for=""> EMAIL</label>
                          <input type="text" name="gmail" id="" class="form-control" value="<?= $gmail ?>">
                      </div>

                      <div class="item">
                          <label for=""> ADRESSE</label>
                          <input type="text" name="adresse" id="" class="form-control" value="<?= $adresse ?>">
                      </div>

                      <div class="item">
                          <label for=""> TELEPHONE</label>
                          <input type="text" name="telephone" id="" class="form-control" value="<?= $telephone ?>">
                      </div>
                 </div>

             <div class="group-form items">

                      <div class="item">
                          <label for=""> FONCTION</label>
                          <input type="text" name="fonction" id="" class="form-control" value="<?= $fonction ?>">
                      </div>

                      <div class="item">
                          <label for=""> NOM UTILISATUER</label>
                          <input type="text" name="userName" id="" class="form-control" value="<?= $userName ?>">
                      </div>

                      <div class="item">
                          <label for=""> MOT DE PASSE</label>
                          <input type="text" name="passWord" id="" class="form-control" value="<?= $passWord ?>">
                      </div>

                </div>
 <div class="btns">
    <div class="save">
     <button type="submit" name="modifier_Agent"class="btn btn-success"> MODIFIER</button>
     </div>
     <div class="save">
     <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
     </div>
      <div class="<?= isset($erreur)?'erreur':'' ?> ">
         <?= isset($erreur)?$erreur:''  ?> 
      </div>
        </div>          
</form>
