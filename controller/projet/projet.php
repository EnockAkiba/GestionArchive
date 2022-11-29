<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/organisation/organisation.php';
        require_once '../../modele/site/site.php';

        $site= new MainClass();   
        // 
        //  insertion de donnees 
        if(isset($_POST['save_projet'])){
              $designation=$_POST['designation'];
               $dureeExec=$_POST['dureeExec'];
               $idOrg=$_POST['idOrg'];
               if(
                    (!empty($designation)) &&
                    (!empty($dureeExec)) &&
                    (!empty($idOrg))
               ){
                        $test =testSite("projet","designation = '$designation' and idOrg='$idOrg' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer ce Projet";
                                }else{
                                $site->insertion("projet", "designation,dureeExec,idOrg", " '$designation', '$dureeExec','$idOrg'");
                                        }
                  }else{
                        $erreur="champs laissé vide";
                  }
        }
        // 
        // 
        //  update de donnees 
if(isset($_POST['modifier'])){
       $id=$_POST['id'];
        $site_modifier=testSite("projet", "idPro='$id'");
}elseif(isset($_POST['modifier_site'])){
        $id=$_POST['id'];    
        $designation=$_POST['designation'];
        $dureeExec=$_POST['dureeExec'];

        $site->Modifier("projet", " designation='$designation',dureeExec='$dureeExec' ", "idPro", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testSite("projet", "designation like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $site->Supprimer("projet","idPro","$id");
}

        // return vue homme
        require_once '../../vues/projet/projet.php';
        // /
       