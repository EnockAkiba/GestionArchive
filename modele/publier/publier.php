<?php
 require_once '../../modele/bdd/pdo.php';
  function testprojet($nomtable,$critere){
             global $pdo;
             $sql="SELECT * FROM $nomtable where $critere";
            $sql=$pdo->prepare($sql);
            $sql->execute();
            $table=$sql->fetchAll(PDO::FETCH_ASSOC);
            return $table;
  }
  function recupererEtatcivil(){
     global $pdo;
     $sql="SELECT EtatCivil.NumEtatCivil, EtatCivil.NomOfficier from EtatCivil"; 
     $sql=$pdo->prepare($sql);
     $sql->execute();
     $tabpub=$sql->fetchAll(PDO::FETCH_ASSOC);
     return $tabpub;
  }
  function recupererProjet(){
    global $pdo;
    $sql="SELECT p.NumProjet, h.NomHomme ,p.DateProjet  FROM Projet as p, Homme as h WHERE h.NumcarteHomme=p.NumcarteHomme  ORDER by p.DateProjet desc "; 
    $sql=$pdo->prepare($sql);
    $sql->execute();
    $tabFemme=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $tabFemme;
 }
function tablePublier(){
    global $pdo;
    $sql="SELECT e.NomOfficier,h.NomHomme ,h.NumcarteHomme, Publier.* FROM EtatCivil as e, Homme as h , Projet as p , Publier where p.NumcarteHomme=h.NumcarteHomme and e.NumEtatCivil=Publier.NumEtatCivil and Publier.NumProjet=p.NumProjet order by NumPublication desc";
    $sql=$pdo->prepare($sql);
    $sql->execute();
    $tabMariage=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $tabMariage;
}
function rechercherMariage($critere){
   global $pdo;
   $sql="SELECT NumcarteHomme from Homme  where $critere"; 
   $sql=$pdo->prepare($sql);
   $sql->execute();
   $tab=$sql->fetchAll(PDO::FETCH_ASSOC);
   foreach($tab as $data){
      $Idhomme=$data['NumcarteHomme'];
   }
   isset($Idhomme)?$Idhomme:$Idhomme=0;
   $sql="SELECT e.NomOfficier,h.NomHomme , Publier.* FROM EtatCivil as e, Homme as h , Projet as p , Publier where p.NumcarteHomme=h.NumcarteHomme and e.NumEtatCivil=Publier.NumEtatCivil and Publier.NumProjet=p.NumProjet and p.NumcarteHomme='$Idhomme'";
   $sql=$pdo->prepare($sql);
   $sql->execute();
   $tabMariage=$sql->fetchAll(PDO::FETCH_ASSOC);
   return $tabMariage;
}