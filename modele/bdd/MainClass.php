<?php
require_once 'pdo.php';
class MainClass{
        public function insertion($nomTable,$champs,$valeurs){
                global $pdo;
                $sql="INSERT INTO $nomTable ($champs) VALUES ($valeurs) ";
                $requete=$pdo->prepare($sql);
                $res=$requete->execute();  
                if(isset($res)){
                    ?>
                    <script> alert('Enregistrement reussi');
                </script>
               <?php
                }
                else{
                    ?>
                    <script> alert('Echec de l\'enregistrement');
                </script>
               <?php
                } 
            }
            public function Modifier($nomTable,$champs,$champsCritere,$valeurCritere){
                global $pdo;
                $sql="UPDATE $nomTable SET $champs WHERE $champsCritere=$valeurCritere";
                $requete=$pdo->prepare($sql); 
                $res=$requete->execute();
                if(isset($res)){
                    ?>
                    <script> alert('Modification réussie');
                </script>
               <?php
                }
                else{
                    ?>
                    <script> alert('Echec de la modification');
                </script>
               <?php
                }
            }
            public function Supprimer($nomTable,$champsCritere,$valeurCritere){
                global $pdo;
                $sql="DELETE FROM $nomTable WHERE $champsCritere=$valeurCritere";
                $requete=$pdo->prepare($sql);
                $res=$requete->execute();
                if(isset($res)){
                    ?>
                    <script> alert('Suppesion réussie');
                </script>
               <?php
                }
                else{
                    ?>
                    <script> alert('Echec de la Suppression');
                </script>
               <?php
                }
            }
            public function Afficher($nomTable){
                global $pdo;
                $sql="SELECT * from $nomTable ";
                $requete=$pdo->prepare($sql);
                $requete->execute();
                $tab=$requete->fetchAll(PDO::FETCH_ASSOC);
                return $tab;
            }
}