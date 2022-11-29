     <div class="container">
         <div class="text">
            <?php 
             require_once '../../modele/bdd/pdo.php';
          @$dateProjet=$_POST['dateProjet'];
            if(!empty($dateProjet)){
                ?>
                  <div class="nav">
                     <div class="haut">
                            <div class="imgs">
                                <img src="../../vues/photosave/drp.png" width="100px">
                            </div>
                            <h3>REPUBLIQUE DEMOCRATIQUE DU CONGO</h3>
                    </div>

                    <div class="bas">
                            <div class="texts">
                          <h4>PROVINCE DU NORD-KIVU</h4>
                             <H4>VILLE DE GOMA</H4>
                             <H4>COMMUNE DE GOMA</H4>
                             <H4>OFFICIER DE L'ETAT CIVIL</H4>  
                            </div>
                      </div>
                </div>
                 <h2 class="tt"> LISTE DE MARIAGE : <span> <?= $dateProjet ?></span></h2>
                 </div>
                 <div class="content">
                    <table>
                         <thead>
                            <tr>
                            <th>Noms homme</th>
                                <th>photo homme</th>
                                <th>Noms femme</th>
                                <th>photo femme</th>
                                <th>Dot</th>
                                <th>Regime</th>
                                <th>Temoin d'epoux</th>
                                <th>temoin d'epouse</th>
                                <!-- <th>Date de projet</th> -->
                            </tr>
                         </thead>
                          <tbody>
                            <?php
                            $sql="SELECT h.NomHomme,f.photoFemme, h.photoHomme, f.NomFemme, p.* from Homme as h , Femme as f , Projet as p WHERE p.NumcarteHomme=h.NumcarteHomme and p.NumcarteFemme=f.NumcarteFemme and p.DateProjet like '%$dateProjet%' ";
                            $sql=$pdo->prepare($sql);
                            $sql->execute();
                            $table=$sql->fetchAll(PDO::FETCH_ASSOC);
                          foreach($table as $data):
                                                ?>
                                                 <tr>
                          <td><?= $data['NomHomme']?></td>
                                                         <td> <img src="../../vues/photosave/<?=$data['photoHomme'] ?>" class="photo"></td>
                                                         <td><?= $data['NomFemme'] ?></td>
                                                         <td> <img src="../../vues/photosave/<?=$data['photoFemme'] ?>" class="photo"></td>
                                                         <td><?= $data['Dot']?></td>
                                                         <td><?= $data['RegimeMatri'] ?></td>
                                                           <td><?= $data['NomTemoin1'] ?></td>
                                                           <td><?= $data['NomTemoin2'] ?></td>
                                                            <?php 
                                                             $date=date_create($data['DateProjet']);
                                                             $convert=date_format( $date, 'd.m.Y');
                                                             ?>
                                                           <!-- <td><?=$convert ?></td> -->
                                                           </tr>
                                    <?php endforeach;
                                         ?>
                          </tbody>
                    </table>
                 </div>
     </div>
     <style>

       /* .acte de mariage styke */
         html{
            padding: 0;
            margin: 0;
         }
        .container{
            width: 96%;
            margin:5px  2%;
            height: 1080px;
        }
.text{
    width: 96%;
    padding: 5px;
}
.text .nav{
    height: 120px;
    /* margin-top: px; */
    position: relative;
}
.text .nav .haut{
     width: 100%;
}
.text .nav .haut h3{
    font-size: 1.3em;
    font-weight: 100;
    position: absolute;
    top: 0;
    right: 70px;
}
.text .nav .bas{   
     width: 100%;
     position: relative;
}
.text .nav .bas h4{
    font-size: 1em;
    font-weight: 100;
    line-height: 4px;
}
.tt{
    text-align: right;
    font-size: 1.3em;
}
.tt span{
     color: darkblue;
     border-bottom: 1px solid gray;
}
.photo{
    width: 60px;
}

 table{
    border: 1px solid gray;
    border-collapse: collapse;
 }
 table thead{
    background: gray;
    border-collapse: collapse;
    color: white;
 }
table tbody tr td{
    padding: 5px;
    border: 1px solid gray;
    border-collapse: collapse;
    text-align: center;
}

      </style>
                <?php
            }else{
                 header("location:../../controller/mariage/mariage.php");
            }
         
    ?>
               
                
            
       