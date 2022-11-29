<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/organisation/organisation.php';
        $organisation= new MainClass();
        // 
        //  insertion de donnees 
        if(isset($_POST['save_versement'])){
                $idOrg=$_POST['idOrg'];
                $montantLet=$_POST['montantLet'];
              $montantChif=$_POST['montantChif'];
               $motifVers=$_POST['motifVers'];

               if(
                    (!empty($idOrg)) &&
                    (!empty($montantLet)) &&
                    (!empty($montantChif)) &&
                    (!empty($motifVers)) 
               ){
                        $test =testOrganisation("versement","idOrg = '$idOrg' and montantLet='$montantLet' and motifVers='$motifVers' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer ce versement";
                                }else{
                                $organisation->insertion("versement", "idOrg,montantLet,montantChif,motifVers", " '$idOrg', '$montantLet','$montantChif','$motifVers' ");
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
        $versement_modifier=testOrganisation("versement", "idVers='$id'");
}elseif(isset($_POST['modifier_versement'])){
        $id=$_POST['id'];    
        $idOrg=$_POST['idOrg'];
        $montantLet=$_POST['montantLet'];
      $montantChif=$_POST['montantChif'];
       $motifVers=$_POST['motifVers'];
        $organisation->Modifier("versement", " idOrg='$idOrg',montantLet='$montantLet' ,montantChif='$montantChif' ,motifVers='$motifVers' ", "idVers", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testOrganisation("versement", "motifVers like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $organisation->Supprimer("versement","idVers","$id");
}
             $tables=tableVersement();
        // return vue homme
        require_once '../../vues/versement/versement.php';
        // /
       