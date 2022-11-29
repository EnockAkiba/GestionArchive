<?php
   foreach($rapport_modifier as $data){
                $id=$data['idRap'];
                $idAgent=$data['idAgent'];
                $idSite=$data['idSite'];
                 $titre=$data['titre'];
                 $contenu=$data['contenu'];
   }
 ?>
 <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">
                    <input type="hidden" name="id" value="<?= $id?>">
                <div class="item">
                <label for=""> AGENT</label>
                  <select name="idAgent" id="" class="form-control">
                  <option value="<?= $idAgent?>"> <?= $idAgent?> selectionner un agent</option>
                      <?php  $agent=recupererAgent() ;
                           foreach($agent as $data){
                       ?>
                       <option value="<?= $data['idAgent'] ?>"><?= $data['noms'] ?></option>
                       <?php } ?>
                  </select>
                </div>
                <div class="item">
                <label for=""> PROJET</label>
                  <select name="idSite" id="" class="form-control">
                  <option value="<?= $idSite ?>">selectioner un projet <?= $idSite ?></option>
                  <?php  $projet=recupererSite() ;
                           foreach($projet as $data){
                       ?>
                       <option value="<?= $data['idSite'] ?>"><?= $data['designation'] ?></option>
                       <?php } ?>
                  </select>
                </div>

                <div class="item">
                      <label for="">TITTRE DU RAPPORT</label>
                      <input type="text" name="titre" id="" class="form-control" value="<?= $titre ?>">
                  </div>

                </div>
        
            <div class="group-form items">
                
            <div class="item">
                      <label for="">CONTENU DU RAPPORT</label>
                      <textarea name="contenu" id="" rows="4" class="form-control" maxlength="500">
                              <?= $contenu ?>
                      </textarea>
                       <style>
                            textarea{
                              resize: none;
                            }
                       </style>
            </div>
                  </div>

                <div class="btns">
                    <div class="save">
                    <button type="submit" name="modifier_rapport"class="btn btn-success"> MODIFIER</button>
                    </div>
                    <div class="save">
                    <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                    </div>
                    <div class="<?= isset($erreur)?'erreur':'' ?> ">
                        <?= isset($erreur)?$erreur:''  ?> 
                    </div>
                        </div>          
                </form>
