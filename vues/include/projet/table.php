<?php
if(isset($_POST['submit'])){
  if(isset($_POST['submit']) && empty($_POST['recherche'])){
    $erreurcherche="Vous devez saisir dans le champ de recherche";
}else{
                              foreach($resultat as $data):
                                $id= $data['idPro'] ;
                           ?>
                                <tr>
                                    <td><?= $data['designation'] ?></td>     
                                     <td><?= $data['dureeExec'] ?></td>
                                       <td>
                                          <form action="" method="post">
                                             <input type="hidden" name="id" value="<?= $id ?>">
                                             <button type="submit" name="modifier" class="btn btn-primary"> <i class="fa fa-edit"></i> </button>
                                             <button type="submit" name="supprimer" class="btn btn-danger"> <i class="fa fa-pencil"></i> </button>
                                            
                                            </form>
                                         </td>
                                         </tr>
                                         <?php endforeach;}
                                          }else{
                                              foreach($table as $data):
                                                $id= $data['idPro'] ;
                           ?>
                                <tr>
                                    <td><?= $data['designation'] ?></td>     
                                     <td><?= $data['dureeExec'] ?></td>
                                       <td>
                                          <form action="" method="post">
                                             <input type="hidden" name="id" value="<?= $id ?>">
                                             <button type="submit" name="modifier" class="btn btn-primary"> <i class="fa fa-edit"></i> </button>
                                             <button type="submit" name="supprimer" class="btn btn-danger"> <i class="fa fa-pencil"></i> </button>
                                            
                                            </form>
                                         </td>
                                                              </tr>
                                    <?php endforeach;
                                         }
                                        