<form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">

                <div class="item">
                <label for=""> AGENT</label>
                  <select name="idAgent" id="" class="form-control">
                      <?php  $agent=recupererAgent() ;
                           foreach($agent as $data){
                       ?>
                       <option value="<?= $data['idAgent'] ?>"><?= $data['noms'] ?></option>
                       <?php } ?>
                  </select>
                </div>
                <div class="item">
                <label for=""> SITE</label>
                  <select name="idSite" id="" class="form-control">
                      <?php  $projet=recupererSite() ;
                           foreach($projet as $data){
                       ?>
                       <option value="<?= $data['idSite'] ?>"><?= $data['designation'] ?></option>
                       <?php } ?>
                  </select>
                </div>
                

                <div class="item">
                      <label for="">TITTRE DU RAPPORT</label>
                      <input type="text" name="titre" id="" class="form-control" >
                  </div>

                </div>
        
            <div class="group-form items">
                
            <div class="item">
                      <label for="">CONTENU DU RAPPORT</label>
                      <textarea name="contenu" id="" rows="4" class="form-control" maxlength="500">

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
                <button type="submit" name="save_rapport"class="btn btn-success"> ENREGISTER</button>
                </div>
                <div class="save">
                <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                </div>
                 <div class="<?= isset($erreur)?'erreur':'' ?> ">
                    <?= isset($erreur)?$erreur:''  ?> 
                 </div>
                   </div>          
      </form>