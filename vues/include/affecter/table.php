<?php
if(isset($_POST['submit'])){
  if(isset($_POST['submit']) && empty($_POST['recherche'])){
    $erreurcherche="Vous devez saisir dans le champ de recherche";
}else{
                              foreach($resultat as $data):
                                $id= $data['idAff'] ;
                           ?>
                                <tr>
                                                         <td><?= $data['noms'] ?></td>     
                                                         <td><?=  $data['designation']?></td>
                                                         <td><?=  $data['dateAffec']?></td>

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
                                              foreach($tab as $data):
                                                $id= $data['idAff'] ;
                                                ?>
                                                     <tr>
                                                         <td><?= $data['noms'] ?></td>     
                                                         <td><?=  $data['designation']?></td>
                                                         <td><?=  $data['dateAffec']?></td>

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
                                        ?>
                                         <style>
                                            .cont{
                                              width: 500px;
                                              overflow: auto;
                                            }
                                         </style>