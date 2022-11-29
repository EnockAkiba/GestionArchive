<?php
   foreach($affecter_modifier as $data){
                $id=$data['idAff'];
                $idAgent=$data['idAgent'];
                $idSite=$data['idSite'];
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for=""> AGENT</label>
                  <select name="idAgent" id="" class="form-control">
                  <option value="<?= $idAgent?>">Selectionner un agent</option>
                      <?php  $agent=recupererAgent() ;
                           foreach($agent as $data){
                       ?>
                       <option value="<?= $data['idAgent'] ?>"><?= $data['noms'] ?></option>
                       <?php } ?>
                  </select>
                </div>

                </div>
        
            <div class="group-form items">
                
            <div class="item">
                <label for=""> SITE</label>
                  <select name="idSite" id="" class="form-control">
                     <option value="<?= $idSite ?>">Selectionner un site</option>
                      <?php  $projet=testRapport("Site","1") ;
                           foreach($projet as $data){
                       ?>
                       <option value="<?= $data['idSite'] ?>"><?= $data['designation'] ?></option>
                       <?php } ?>
                  </select>
                </div>
        
                  </div>
                <div class="btns">
                    <div class="save">
                    <button type="submit" name="modifier_affecter"class="btn btn-success"> MODIFIER</button>
                    </div>
                    <div class="save">
                    <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                    </div>
                    <div class="<?= isset($erreur)?'erreur':'' ?> ">
                        <?= isset($erreur)?$erreur:''  ?> 
                    </div>
                        </div>          
                </form>
