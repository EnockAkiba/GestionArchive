<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/site/site.php';
        $site= new MainClass();   
        // 
        //  insertion de donnees 
        if(isset($_POST['save_site'])){
              $designation=$_POST['designation'];
               $province=$_POST['province'];
               $idPro=$_POST['idPro'];
               if(
                    (!empty($designation)) &&
                    (!empty($province)) &&
                    (!empty($idPro))
               ){
                        $test =testSite("Site","designation = '$designation' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer ce Site";
                                }else{
                                $site->insertion("Site", "idPro,designation,province", " '$idPro','$designation', '$province' ");
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
        $site_modifier=testSite("Site", "idSite='$id'");
}elseif(isset($_POST['modifier_site'])){
        $id=$_POST['id'];    
        $designation=$_POST['designation'];
        $province=$_POST['province'];

        $site->Modifier("Site", " designation='$designation',province='$province' ", "idSite", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testSite("Site", "designation like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $site->Supprimer("Site","idSite","$id");
}

        // return vue homme
        require_once '../../vues/site/site.php';
        // /
       