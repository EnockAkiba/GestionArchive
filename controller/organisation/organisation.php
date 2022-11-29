<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/organisation/organisation.php';
        $organisation= new MainClass();
        // 
        //  insertion de donnees 
        if(isset($_POST['save_ornagisation'])){
              $adresse="Ville : ".$_POST['ville']." , Commune : ".$_POST['commune'].", Av :".$_POST['quartier'];
              $designation=$_POST['designation'];
               $contact=$_POST['contact'];

               if(
                    (!empty($designation)) &&
                    (!empty($adresse)) &&
                    (!empty($contact)) 
               ){
                        $test =testOrganisation("ornagisation","designation = '$designation' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer cette organisation";
                                }else{
                                $organisation->insertion("ornagisation", "designation,adresse,contact", " '$designation', '$adresse','$contact' ");
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
        $organisation_modifier=testOrganisation("ornagisation", "idOrg='$id'");
}elseif(isset($_POST['modifier_homme'])){
        $id=$_POST['id'];    
        $adresse=$_POST['adresse'];       
        $designation=$_POST['designation'];
        $contact=$_POST['contact'];
        $organisation->Modifier("ornagisation", " designation='$designation',adresse='$adresse' ", "idOrg", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testOrganisation("ornagisation", "designation like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $organisation->Supprimer("ornagisation","idOrg","$id");
}

        // return vue homme
        require_once '../../vues/organisation/organisation.php';
        // /
       