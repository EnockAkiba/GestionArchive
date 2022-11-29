<form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="group-form items">

                <div class="item">
                    <label for="">NOM </label>
                     <input type="text" name="nom" id="" class="form-control" placeholder="Entrer le nom">
                </div>
              
                <div class="item">
                    <label for="">POSTNOM</label>
                     <input type="text" name="Postnom" id="" class="form-control" placeholder="Entrer le Postnom">
                </div>

                <div class="item">
                    <label for="">PRENOM</label>
                     <input type="text" name="Prenom" id="" class="form-control" placeholder="Entrer le Prenom">
                </div>

                <div class="item">
                    <label for="">CATEGORIE</label>
                    <select name="categorie" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="CDI">CDI</option>
                                            <option value="CDD">CDD</option>
                                        </select>
                </div>

               
            </div>
            <div class="group-form items">
                 
                        <div class="item">
                                <label for="">SEXE</label>                    
                                        <select name="sexe" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                            </div>
            <div class="item">
                
                          <label for=""> EMAIL</label>
                          <input type="text" name="gmail" id="" class="form-control" placeholder="Example@gmail.com">
                      </div>

                      <div class="item">
                          <label for=""> ADRESSE</label>
                          <input type="text" name="adresse" id="" class="form-control" placeholder="">
                      </div>

                      <div class="item">
                          <label for=""> TELEPHONE</label>
                          <input type="text" name="telephone" id="" class="form-control" placeholder="">
                      </div>
                 </div>

             <div class="group-form items">

                      <div class="item">
                          <label for=""> FONCTION</label>
                          <input type="text" name="fonction" id="" class="form-control" placeholder="">
                      </div>

                      <div class="item">
                          <label for=""> NOM UTILISATUER</label>
                          <input type="text" name="userName" id="" class="form-control" >
                      </div>

                      <div class="item">
                          <label for=""> MOT DE PASSE</label>
                          <input type="password" name="passWord" id="" class="form-control" >
                      </div>

                    
                    
                </div>

            
            <div class="btns">
               <div class="save">
                <button type="submit" name="save_agent"class="btn btn-success"> ENREGISTER</button>
                </div>
                <div class="save">
                <button type="submit" name="effacer"class="btn btn-warning"> ANNULER</button>
                </div>
                 <div class="<?= isset($erreur)?'erreur':'' ?> ">
                    <?= isset($erreur)?$erreur:''  ?> 
                 </div>
                   </div>          
      </form>