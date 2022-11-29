<?php
require_once '../../modele/bdd/pdo.php';
 function recuperMessage($critere){
    global $pdo;
    $sql=" SELECT Message.*,   Agent.noms FROM `Message` , Agent  where Agent.idAgent=Message.idAgent and  $critere ORDER BY `Message`.`dateMessage` DESC";
    $sql=$pdo->prepare($sql);
    $sql->execute();
     $tabmessage=$sql->fetchAll(PDO::FETCH_ASSOC);
     return $tabmessage;
 }
function recuperId( $critere){
    global $pdo;
    $sql=" SELECT idAgent, noms FROM `Agent` WHERE $critere";
    $sql=$pdo->prepare($sql);
   $sql->execute();
    $tabId=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $tabId;
}
