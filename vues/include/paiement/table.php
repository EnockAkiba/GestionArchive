<?php
if(isset($_POST['submit'])){
  if(isset($_POST['submit']) && empty($_POST['recherche'])){
    $erreurcherche="Vous devez saisir dans le champ de recherche";
}else{
                              foreach($resultat as $data):
                                $id= $data['NumcarteHomme'] ;
                           ?>
                                <tr>
                                    <td><?= $data['NomHomme'] ?></td>     
                                     <td><?= $data['AgeHomme'] ?></td>
                                      <td><?= $data['ProfessionHomme'] ?></td>
                                      <td><?= $data['AdressHomme'] ?></td>
                                      <td><?= $data['ProvinceHomme'] ?></td>
                                      <td><?= $data['NomPere'] ?></td>
                                      <td><?= $data['NomMere'] ?></td>
                                      <td><?= $data['PhoneHomme'] ?></td>
                                      <td> <img src="../../vues/photosave/<?=$data['photoHomme'] ?>" class="photo"></td>
                                      <td>
                                          <form action="" method="post">
                                             <input type="hidden" name="id" value="<?= $id ?>">
                                             <button type="submit" name="modifier" class="btn btn-primary"> <i class="fa fa-edit"></i> </button>
                                             <button type="submit" name="supprimer" class="btn btn-danger"> <i class="fa fa-pencil"></i> </button>
                                             <a href="../homme/show.php?idhomme=<?=$id ?>" class="btn btn-secondary" > <i class="fa fa-eye"></i></a>

                                            </form>
                                         </td>
                                         </tr>
                                         <?php endforeach;}
                                          }else{
                                              foreach($table as $data):
                                                $id= $data['NumcarteHomme'] ;
                                                ?>
                                                     <tr>
                                                         <td><?= $data['NomHomme'] ?></td>
                                                          <td><?= $data['AgeHomme'] ?></td>
                                                           <td><?= $data['ProfessionHomme'] ?></td>
                                                           <td><?= $data['AdressHomme'] ?></td>
                                                           <td><?= $data['ProvinceHomme'] ?></td>
                                                           <td><?= $data['NomPere'] ?></td>
                                                           <td><?= $data['NomMere'] ?></td>
                                                           <td><?= $data['PhoneHomme'] ?></td>
                                                           <td> <img src="../../vues/photosave/<?=$data['photoHomme'] ?>" class="photo"></td>
                                                           <td>
                                                               <form action="" method="post">
                                                               <input type="hidden" name="id" value="<?= $id ?>">
                                                                  <button type="submit" name="modifier" class="btn btn-primary"> <i class="fa fa-edit"></i> </button>
                                                                  <button type="submit" name="supprimer" class="btn btn-danger"> <i class="fa fa-pencil"></i> </button>
                                                                 <a href="../homme/show.php?idhomme=<?=$id ?>" class="btn btn-secondary" > <i class="fa fa-eye"></i></a>

                                                                 </form>
                                                          </td>
                                                              </tr>
                                    <?php endforeach;
                                         }
                                        