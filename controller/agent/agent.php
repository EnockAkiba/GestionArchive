<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/agent/agent.php';
        $agent= new MainClass();

        // 
        //  insertion de donnees 
        if(isset($_POST['save_agent'])){
              $NomAgent=$_POST['nom']." ".$_POST['Postnom']." ".$_POST['Prenom'];
              $categorie=$_POST['categorie'];
              $sexe=$_POST['sexe'];
              $gmail=$_POST['gmail'];
              $adresse=$_POST['adresse'];
              $telephone=$_POST['telephone'];
              $fonction=$_POST['fonction'];
              $userName=$_POST['userName'];
              $passWord=$_POST['passWord'];
               if(
                    (!empty($NomAgent)) &&
                    (!empty($categorie)) &&
                    (!empty($sexe)) &&
                    (!empty($gmail)) &&
                    (!empty($adresse)) &&
                    (!empty($telephone)) &&
                    (!empty($fonction)) &&
                    (!empty($userName)) &&
                    (!empty($passWord)) 
               ){
                        $test =testAgent("Agent","noms = '$NomAgent' ");
                        if(count($test)>=1){
                                $erreur="impossible d'enregistrer cet Agent";
                                }else{
                                        
                                $agent->insertion("Agent"," noms,sexe,categorie,gmail,adresse,telephone,fonction, userName, passWord", " '$NomAgent', '$sexe','$categorie','$gmail','$adresse','$telephone','$fonction','$userName','$passWord' ");
                                        }
                  }else{
                        $erreur="champs laissent vides";
                  }if(isset($_POST['save_homme'])){

                  }
        }
        // 
        // 
        //  update de donnees 
if(isset($_POST['modifier'])){
       $id=$_POST['id'];
        $Agent_modifier=testAgent("Agent", "idAgent='$id'");
}elseif(isset($_POST['modifier_Agent'])){
        $id=$_POST['id'];           
          $noms=$_POST['noms'];
          $categorie=$_POST['categorie'];
          $sexe=$_POST['sexe'];
          $gmail=$_POST['gmail'];
          $adresse=$_POST['adresse'];
          $telephone=$_POST['telephone'];
          $fonction=$_POST['fonction'];
          $userName=$_POST['userName'];
          $passWord=$_POST['passWord'];
        $agent->Modifier("Agent", " noms='$noms',categorie='$categorie',sexe='$sexe',gmail='$gmail',adresse='$adresse', telephone='$telephone',fonction='$fonction', userName='$userName', passWord='$passWord'  ", "idAgent", " '$id' ");
}

        // 
        // recherche de donnees
         if(isset($_POST['submit']) && !empty($_POST['recherche'])){
                    $recherche=$_POST['recherche'];
                        $resultat=testAgent("Agent", "noms like '%$recherche%' ");
                        $count=count($resultat);
         }elseif(isset($_POST['submit']) && empty($_POST['recherche'])){
                $erreurcherche="la barre de recherche est vide";
         }
// 
// 
//delete donnees 
if(isset($_POST['oui'])){
        $id=$_POST['id'];
        $agent->Supprimer("Agent","idAgent","$id");
}

        // return vue homme
        require_once '../../vues/agent/agent.php';
        // /
       