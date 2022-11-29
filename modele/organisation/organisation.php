<?php
require_once '../../modele/bdd/pdo.php';
  function testOrganisation($nomtable,$critere){
             global $pdo;
             $sql="SELECT * FROM $nomtable where $critere";
            $sql=$pdo->prepare($sql);
            $sql->execute();
            $table=$sql->fetchAll(PDO::FETCH_ASSOC);
            return $table;
  }
  function recupererOrg(){
    global $pdo;
    $sql="SELECT idOrg, designation from ornagisation order by idOrg desc"; 
    $sql=$pdo->prepare($sql);
    $sql->execute();
    $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $tabAgent;
 }
 function tableVersement(){
  global $pdo;
  $sql="SELECT versement.*, ornagisation.designation FROM `versement`, ornagisation WHERE ornagisation.idOrg=versement.idOrg"; 
  $sql=$pdo->prepare($sql);
  $sql->execute();
  $tabAgent=$sql->fetchAll(PDO::FETCH_ASSOC);
  return $tabAgent;
}