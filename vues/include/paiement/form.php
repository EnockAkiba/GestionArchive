<form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">

                <div class="item">
                    <label for="">NOM</label>
                     <input type="text" name="NomHomme" id="" class="form-control" placeholder="Entrer le nom">
                </div>
              
                <div class="item">
                    <label for="">POSTNOM</label>
                     <input type="text" name="PostnomHomme" id="" class="form-control" placeholder="Entrer le Postnom">
                </div>

                <div class="item">
                    <label for="">PRENOM</label>
                     <input type="text" name="PrenomHomme" id="" class="form-control" placeholder="">
                </div>

                <div class="item">
                    <label for="">PROFESSION</label>
                     <input type="text" name="ProfessionHomme" id="" class="form-control" placeholder="Entrer la profession">
                </div>

                <div class="item">
                      <label for="">AJOUTER UNE PHOTO</label>
                      <input type="file" name="photoHomme" id=""  class="form-control" placeholder="">
                  </div>

            </div>

            <div class="group-form items">
    
                  <div class="item">
                      <label for="">DATE DE NAISSANCE</label>
                      <input type="date" name="AgeHomme" maxlength="3" class="form-control" placeholder="">
                  </div>

                  <div class="item">
                      <label for="">ADRESSE</label>
                      <input type="text" name="AdressHomme" id="" class="form-control" placeholder="">
                  </div>


                  <div class="item">
                      <label for="">TELEPHONE</label>                    
                        <input type="number" name="PhoneHomme" maxlength="10" class="form-control" placeholder="Entrer un numéro de téléphone">
                  </div>

                  <div class="item">
                      <label for="">VILLAGE D'ORIGINE</label>
                      <input type="text" name="VillageOrigHomme" id="" class="form-control" placeholder="">
                  </div>

                  <div class="item">
                      <label for="">TERRITOIRE D'ORIGINE</label>
                      <input type="text" name="TerritOrigHomme" id="" class="form-control" placeholder="">
                  </div>
             </div>

             <div class="group-form items">

                      <div class="item">
                          <label for=""> PROVINCE</label>
                          <input type="text" name="ProvinceHomme" id="" class="form-control" placeholder="">
                      </div>

                      <div class="item">
                      <label for="">NATIONALITE</label>
                      <select name="nationaliteHomme" id="" class="form-control">
                         <option value="congolaise">congolaise</option>
                      </select>
                  </div>

                  <div class="item">
                          <label for="">NOM PERE</label>
                          <input type="text" name="NomPere" id="" class="form-control" placeholder=" ">
                      </div>
                    
                      <div class="item">
                      <label for="">NOM DE LA MERE </label>
                      <input type="text" name="NomMere" id="" class="form-control" placeholder="">
                  </div>
    
                </div>

            
            <div class="btns">
               <div class="save">
                <button type="submit" name="save_homme"class="btn btn-success"> ENREGISTER</button>
                </div>
                <div class="save">
                <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                </div>
                 <div class="<?= isset($erreur)?'erreur':'' ?> ">
                    <?= isset($erreur)?$erreur:''  ?> 
                 </div>
                   </div>          
      </form>