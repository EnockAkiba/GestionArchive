<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/dashbord/dashbord.php';
  $mariage=mariage();
   foreach($mariage as $data){
    $toutMariage=$data['mariage'];
   }
   $MariageMois=MariageMois();
   foreach($MariageMois as $data){
    $mariageMois=$data['mois'];
   }
   $MariageSemaine=MariageSemaine();
   foreach($MariageSemaine as $data){
    $MariageSemaine=$data['semaine'];
   }
   $MariageAujourdhui=MariageAujourdhui();
   foreach($MariageAujourdhui as $data){
    $MariageAujourdhui=$data['aujourdhui'];
   }



// 
//    
// publication resultat
$publication=publication();
foreach($publication as $data){
 $publication=$data['publication'];
}
$publicationMois=publicationMois();
foreach($publicationMois as $data){
 $mariageMois=$data['mois'];
}
$publicationSemaine=publicationSemaine();
foreach($publicationSemaine as $data){
 $publicationSemaine=$data['semaine'];
}
$publicationAujourdhui=publicationAujourdhui();
foreach($publicationAujourdhui as $data){
 $publicationAujourdhui=$data['aujourdhui'];
}
                // return vue homme
                require_once '../../vues/dashbord/dashbord.php';
                // /
               