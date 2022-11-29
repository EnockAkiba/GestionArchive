<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/rapport/rapport.php';
        $rapport= new MainClass();   
        // 
        //  insertion de donnees 
        if(isset($_POST['save_affecter'])){
              $idAgent=$_POST['idAgent'];
              $idSite=$_POST['idSite'];

               if(
                    (!empty($idAgent)) &&
                    (!empty($idSite)) 
               ){
                        $test =testRapport("affecter","idAgent = '$idAgent' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer cette affectation";
                                }else{
                                $rapport->insertion("affecter", "idAgent,idSite", " '$idAgent','$idSite' ");
                                        }
                  }else{
                        $erreur="champs laissent vides";
                  }
        }
        // 
        // 
        //  update de donnees 
if(isset($_POST['modifier'])){
       $id=$_POST['id'];
        $affecter_modifier=testRapport("affecter", "idAff='$id'");
}elseif(isset($_POST['modifier_affecter'])){
        $id=$_POST['id'];    
        $idAgent=$_POST['idAgent'];
        $idSite=$_POST['idSite'];
        $rapport->Modifier("affecter", " idAgent='$idAgent',idSite='$idSite' ", "idAff", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testRapport("affecter","dateAffec like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $rapport->Supprimer("affecter","idAff","$id");
}
$affecter= new MainClass();
$table=$affecter->Afficher("affecter");


$tab=affecter();
        // return vue homme
        require_once '../../vues/affecter/affecter.php';
        // /
       