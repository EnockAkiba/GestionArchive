<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/rapport/rapport.php';
        $rapport= new MainClass();   
        // 
        //  insertion de donnees 
        if(isset($_POST['save_rapport'])){
              $idAgent=$_POST['idAgent'];
              $idSite=$_POST['idSite'];
               $titre=$_POST['titre'];
               $contenu=$_POST['contenu'];

               if(
                    (!empty($idAgent)) &&
                    (!empty($idSite)) &&
                    (!empty($titre)) &&
                    (!empty($contenu))
               ){
                        $test =testRapport("Rapport","titre = '$titre' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer ce rapport";
                                }else{
                                $rapport->insertion("Rapport", "idAgent,idSite,titre,contenu", " '$idAgent','$idSite', '$titre', '$contenu' ");
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
        $rapport_modifier=testRapport("Rapport", "idRap='$id'");
}elseif(isset($_POST['modifier_rapport'])){
        $id=$_POST['id'];    
            $idAgent=$_POST['idAgent'];
        $idSite=$_POST['idSite'];
               $titre=$_POST['titre'];
               $contenu=$_POST['contenu'];
        $rapport->Modifier("Rapport", " idAgent='$idAgent',idSite='$idSite' ,titre= '$titre', contenu='$contenu' ", "idRap", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=rechercherRapport(" Rapport.titre like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $rapport->Supprimer("Rapport","idRap","$id");
}
      $rapport=tableAgent();
        // return vue homme
        require_once '../../vues/rapport/rapport.php';
        // /
       