<?php
         require_once '../../modele/bdd/pdo.php';

                  
                //    decomposition de la date

                $date = date('Y-m-d');
                  $annee =  date('Y'); 
                  $mois =  date('m');
                         //    decomposition de la date

                  function mariage(){
                     global $pdo,$date;
                  $mariages = "SELECT count(*) as mariage
                  from Projet   where YEAR(`DateProjet`) = YEAR('$date');";
                    $mariage = $pdo->prepare($mariages);
                    $mariage->execute();
                    $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                     return $r;
                  }
          

                         function MariageAujourdhui(){
                            global $pdo,$date;
                          $mariages = "SELECT count(*) as `aujourdhui` 
                            from `Projet` 
                            where `DateProjet` = '$date';";  
                                    $mariage = $pdo->prepare($mariages);
                                    $mariage->execute();
                                    $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                                    return $r;
                         }
                        
                        function MariageSemaine(){
                            global $pdo,$date;
                            $mariages = "SELECT count(*) as `semaine` 
                            from `Projet` 
                            where YEARWEEK(`DateProjet`) = YEARWEEK('$date');";
                          $mariage = $pdo->prepare($mariages);
                          $mariage->execute();
                          $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                          return $r;
                        }
                        function MariageMois(){
                                       global $pdo,$annee,$mois;
                                $mariages =  "SELECT count(*) as `mois` 
                                from `Projet` 
                                where YEAR(`DateProjet`) = $annee and 
                                MONTH(`DateProjet`) = $mois;";
                                        $mariage = $pdo->prepare($mariages);
                                    $mariage->execute();
                                    $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                                    return $r;
                        }
                

                        // 
                        // 
                        // publication dashbord
                        function publication(){
                          global $pdo,$date;
                       $mariages = "SELECT count(*) as publication
                       from Publier   where YEAR(`DatePublication`) = YEAR('$date');";
                         $mariage = $pdo->prepare($mariages);
                         $mariage->execute();
                         $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                          return $r;
                       }
               
     
                              function publicationAujourdhui(){
                                 global $pdo,$date;
                               $mariages = "SELECT count(*) as `aujourdhui` 
                                 from `Publier` 
                                 where `DatePublication` = '$date';";  
                                         $mariage = $pdo->prepare($mariages);
                                         $mariage->execute();
                                         $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                                         return $r;
                              }
                             
                             function publicationSemaine(){
                                 global $pdo,$date;
                                 $mariages = "SELECT count(*) as `semaine` 
                                 from `Publier` 
                                 where YEARWEEK(`DatePublication`) = YEARWEEK('$date');";
                               $mariage = $pdo->prepare($mariages);
                               $mariage->execute();
                               $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                               return $r;
                             }
                             function publicationMois(){
                                            global $pdo,$annee,$mois;
                                     $mariages =  "SELECT count(*) as `mois` 
                                     from `Publier` 
                                     where YEAR(`DatePublication`) = $annee and 
                                     MONTH(`DatePublication`) = $mois;";
                                             $mariage = $pdo->prepare($mariages);
                                         $mariage->execute();
                                         $r = $mariage->fetchAll(PDO::FETCH_ASSOC);
                                         return $r;
                             }
