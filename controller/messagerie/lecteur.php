<?php
        require_once '../../modele/bdd/MainClass.php';
        require_once '../../modele/messagerie/messagerie.php';
        $messagerie= new MainClass();
        if(isset($_POST['submit'])){
            $destinateur=$_POST['destinateur'];
            $idAgent=$_POST['idAgent'];
            $contenu=$_POST['contenu'];
                if(
                    (!empty($idAgent))&&
                    (!empty($destinateur))&&
                    (!empty($contenu))
                ){
                        $messagerie->insertion("Message", "idAgent,destinateur,contenu", " '$idAgent' , '$destinateur' , '$contenu' ");
                }
        }


                // return vue homme
                require_once '../../vues/messagerie/lecteur.php';
                // /