<form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">

                <div class="item">
                <label for="">NOM DE L'ORGANISATION</label>
                     <input type="text" name="designation" id="" class="form-control" >
                </div>
              
                <div class="item">
                    <label for="">VILLE</label>
                     <input type="text" name="ville" id="" class="form-control">
                </div>
            </div>

            <div class="group-form items">
    
          

                  <div class="item">
                      <label for="">COMMUNE</label>
                      <input type="text" name="commune" id="" class="form-control" >
                  </div>

                  <div class="item">
                      <label for="">QUARTIER</label>                    
                        <input type="text" name="quartier" maxlength="10" class="form-control" >
                  </div>

                  <div class="item">
                      <label for="">CONTACT</label>                    
                        <input type="text" name="contact" maxlength="10" class="form-control" >
                  </div>

                  </div>
            <div class="btns">
               <div class="save">
                <button type="submit" name="save_ornagisation"class="btn btn-success"> ENREGISTER</button>
                </div>
                <div class="save">
                <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                </div>
                 <div class="<?= isset($erreur)?'erreur':'' ?> ">
                    <?= isset($erreur)?$erreur:''  ?> 
                 </div>
                   </div>          
      </form>