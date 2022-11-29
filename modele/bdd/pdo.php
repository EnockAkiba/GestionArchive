<?php
 $user="root";
 $password="";
try {
     $pdo=new PDO('mysql:host=localhost;dbname=gestionArchive',$user,$password);
} catch (PDOException $e) {
echo "une erreur sql".$e->getMessage();
}
?>