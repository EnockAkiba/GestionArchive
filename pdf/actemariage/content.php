     <div class="container">
         <div class="text">
            <?php 
             require_once '../../modele/bdd/pdo.php';
           $Idhomme=$_GET['id'];
                $sql="SELECT h.*,h.NomPere as pHomme, h.NomMere as mHomme,f.*,f.NomPere as pFemme, f.NomMere as mFemme,p.*, EtatCivil.NomOfficier from Homme as h , Femme as f , Projet as p , EtatCivil, Publier WHERE p.NumcarteHomme=h.NumcarteHomme and p.NumcarteFemme=f.NumcarteFemme and p.NumcarteHomme='$Idhomme' and EtatCivil.NumEtatCivil=Publier.NumEtatCivil and Publier.NumProjet=p.NumProjet ";
                $sql=$pdo->prepare($sql);
                $sql->execute();
                $tabMariage=$sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($tabMariage as $data){
            $NumcarteHomme=$data['NumcarteHomme'];
            $NumcarteFemme=$data['NumcarteFemme'];
            // homme data
            $NomHomme=$data['NomHomme'];
            $ProfessionHomme=$data['ProfessionHomme'];
            $photoHomme=$data['photoHomme'];
             $date1=  date_create($data['AgeHomme']);
            $AgeHomme=date_format($date1, "d.m.Y");
            $AdressHomme=$data['AdressHomme'];
            $VillageOrigHomme=$data['VillageOrigHomme'];
            $TerritOrigHomme=$data['TerritOrigHomme'];
            $ProvinceHomme=$data['ProvinceHomme'];
            $nationaliteHomme=$data['nationaliteHomme'];
            $pHomme=$data['pHomme'];
            $mHomme=$data['mHomme'];

            // 
            // femme data
            $Nomfemme=$data['NomFemme'];
            $ProfessionFemme=$data['ProfessionFemme'];
            $photoFemme=$data['photoFemme'];
            $date=  date_create($data['AgeFemme']);
            $AgeFemme=date_format($date, "d.m.Y");
            $AdressFemme=$data['AdressFemme'];
            $VillageOrigFemme=$data['VillageOrigFemme'];
            $TerritOrigFemme=$data['TerritOrigFemme'];
            $ProvinceFemme=$data['ProvinceFemme'];
            $nationaliteFemme=$data['nationaliteFemme'];
            $pFemme=$data['pFemme'];
            $mFemme=$data['mFemme'];

            // 
            // officier 
            $NomOfficier=$data['NomOfficier'];
            $Dot=$data['Dot'];
            $RegimeMatri=$data['RegimeMatri'];
            $date2=  date_create($data['DateProjet']);
            $DateProjet=date_format($date2, "d.m.Y");
            }
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
                            
                            <div class="epoux">
                                        <div class="imgs">
                                              <img src="../../vues/photosave/<?= $photoHomme?>" width="100px" height="100px">
                                               <img src="../../vues/photosave/<?= $photoFemme?>" width="100px"height="100px">
                                         </div>
                             </div>
                      </div>
                </div>
                 <h2 class="tt"> ACTE DE MARIAGE</h2>
                   <p>Nous  <?=   $NomOfficier ?> Officier de l'etat civil et Bourgoumestre <br>    
                    de la commune de goma et y résident avons procédé à l'inscription du mariage civil contacté à <br>
                    Goma le <?=   $DateProjet ?>     <br>
                    Entre : 
                </p>
                <p>
                    Le nommé  : <?=   $NomHomme ?> né à <?=   $VillageOrigHomme ?>le <?=   $AgeHomme ?> de nationalité CONGOLAISE fils  
                    de  <?=   $pHomme ?> et de  <?=    $mHomme ?> 
                    Profession <?=   $ProfessionHomme ?> Originaire de <?=   $VillageOrigHomme ?> 
                    Territoire de <?=   $TerritOrigHomme ?> 
                    Province du (de) <?=   $ProvinceHomme ?> .Résidence temporaire à <?=   $AdressHomme ?>  <br>
                    D'une part, <br>
                    Et 
                </p>

                <p>
                    Le nommé  : <?=   $Nomfemme ?> né à  <?=   $VillageOrigFemme."  "." le  " . $AgeFemme ?> de nationalité CONGOLAISE fils  
                    de  <?=   $pFemme ?> et de  <?=    $mFemme ?> 
                    Profession <?=   $ProfessionFemme ?> Originaire de <?=   $VillageOrigFemme ?> 
                    Territoire de <?=   $TerritOrigFemme ?> 
                    Province du (de) <?=   $ProvinceFemme ?> .Résidence temporaire à <?=   $AdressFemme ?>  <br>
                    D'une part, <br>
                    Et 
                </p>
                 <p>
                     D'autre part, en présence de leurs parents et témoins respectifs.
                     La Dote a été <?=   $Dot ?>  conformement à la cotume <br>
                     Les epoux ont opté pour la régime de <?=   $RegimeMatri ?> 
                 </p>
                     <h6 class="sin"> Fait à Goma  le <?= date("d.m.Y") ?>  </h6>
                     <footer>
                           <h5> OFFICIER DE L'ETAT CIVIL</h5>
                           <h6>Sceau </h6>
                     </footer>
                     <?php
         
                   ?>
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
            margin:20px  2%;
            height: 1080px;
        }
.text{
    width: 96%;
    border: 1px solid black;
    padding: 10px;
    height: 1050px;
}
.text .nav{
    height: 240px;
    margin-top: 20px;
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
    right: 0;
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
.text .nav .bas .epoux{
    position: absolute;
    top: 20%;
    right: 0;
}
.text .nav .bas .epoux img{
    width: 120px;
    height: 120px;
}
.tt{
    text-align: center;
    border-bottom: 1px solid rgba(0, 0, 0, 0.171);
}

 p{
    text-align: justify;
    width: 90%;
    margin: 5px auto;
 }
 .sin{
    text-align: right;
    width: 90%;
 }
 footer {
    width: 90%;
 }
 footer h5{
    text-align: center;
 }
 footer h6{
    text-align: center;
 }

      </style>