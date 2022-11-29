<?php
 require_once '../../modele/bdd/pdo.php';
  function testRapport($nomtable,$critere){
             global $pdo;
             $sql="SELECT * FROM $nomtable where $critere";
            $sql=$pdo->prepare($sql);
            $sql->execute();
            $table=$sql->fetchAll(PDO::FETCH_ASSOC);
            return $table;
  }
  function recupererAgent(){
     global $pdo;
     $sql="SELECT idAgent, noms from Agent order by idAgent desc"; 
     $sql=$pdo->prepare($sql);
     $sql->execute();
     $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
     return $tabAgent;
  }
  function recupererSite(){
   global $pdo;
   $sql="SELECT idSite, designation from Site order by idSite desc"; 
   $sql=$pdo->prepare($sql);
   $sql->execute();
   $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
   return $tabAgent;
}
   function tableAgent(){
        global $pdo;
        $sql="SELECT Rapport.*,Agent.noms, Site.designation FROM `Rapport` , Agent, Site WHERE Agent.idAgent=Rapport.idAgent and Site.idSite=Rapport.idSite";
        $sql=$pdo->prepare($sql);
        $sql->execute();
        $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $tabAgent;
   }
   function rechercherRapport($critere){
      global $pdo;
      $sql="SELECT Rapport.*,Agent.noms, Site.designation FROM `Rapport` , Agent, Site WHERE Agent.idAgent=Rapport.idAgent and  $critere";
      $sql=$pdo->prepare($sql);
      $sql->execute();
      $tabRapp=$sql->fetchAll(PDO::FETCH_ASSOC);
      return $tabRapp;
   }
   function affecter(){
      global $pdo;
        $sql="SELECT affecter.*, Agent.noms,Site.designation FROM `affecter`, Agent,Site WHERE Agent.idAgent=affecter.idAgent and Site.idSite=affecter.idSite";
        $sql=$pdo->prepare($sql);
        $sql->execute();
        $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $tabAgent;
   }