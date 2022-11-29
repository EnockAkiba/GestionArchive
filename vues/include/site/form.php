<form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">

                <div class="item">
                <label for="">NOM DU SITE</label>
                     <input type="text" name="designation" id="" class="form-control" >
                </div>

                </div>
        
            <div class="group-form items">
    
          

                  <div class="item">
                      <label for="">PROVINCE</label>
                      <input type="text" name="province" id="" class="form-control" >
                  </div>

                  </div>
            <div class="btns">
               <div class="save">
                <button type="submit" name="save_site"class="btn btn-success"> ENREGISTER</button>
                </div>
                <div class="save">
                <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                </div>
                 <div class="<?= isset($erreur)?'erreur':'' ?> ">
                    <?= isset($erreur)?$erreur:''  ?> 
                 </div>
                   </div>          
      </form>