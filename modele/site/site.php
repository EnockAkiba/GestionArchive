<?php
require_once '../../modele/bdd/pdo.php';
  function testSite($nomtable,$critere){
             global $pdo;
             $sql="SELECT * FROM $nomtable where $critere";
            $sql=$pdo->prepare($sql);
            $sql->execute();
            $table=$sql->fetchAll(PDO::FETCH_ASSOC);
            return $table;
  }
