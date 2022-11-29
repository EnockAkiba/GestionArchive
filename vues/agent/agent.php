
<?php  require_once '../../vues/include/header.php' ;
 $Agent= new MainClass();
 $table=$Agent->Afficher("Agent");
?>
<script src="../../vues/include/agent/javascript.js"></script>
<body id="body">
   <main>
  <div class="formulaire" id="formulaire">
     <div class="titre">
                    <h3>  <?= isset($_POST['modifier'])?'MODIFIER UN AGENT' : 'AJOUTER UN  AGENT' ?> </h3>
                   <div class="right">
                              <label onclick="cache()"><i class="fa fa-eye-slash"></i></label>
                    </div>
     </div>
     <?php 
        if(isset($_POST['modifier'])){
          require '../../vues/include/agent/form_update.php';
        }else{
       require '../../vues/include/agent/form.php'  ;
        }
       ?>
    </div>=
      <div class="formulaire tables" id="table">
               <div  class="cher">
                  <form action="" method="post" class="form">
                             <h5> <a href=""> <i class="fa fa-refresh"></i> </a> <?= isset($count)?$count.'resultat':count($table).'Agents enregistrés' ?> </h5>
                              <?= isset($erreurcherche)? $erreurcherche :''?>
                              <div class="item">
                              <input type="search" name="recherche"  class="form-control" id="" value="<?= isset($_POST['submit'])? $_POST['recherche']:'' ?>" placeholder="barre de recherche">
                              <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-search"></i></button>
                            </div>
                    </form>
               </div>
          <div class="tb">
            <table class="table table-hover">
                        <thead>
                          <tr>
                                <!-- <th>ID</th> -->
                                <th>Nom & Postnom & Prenom</th>
                                <th>Sexe </th>
                                <th>Categorie</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Fonction</th>
                                <th>userName</th>
                                <th>Mot de pase</th>
                                 <th>Action</th>
                          </tr>
                        </thead>
                         <tbody>
                           <?php  
                           require '../../vues/include/agent/table.php'
                       ?>
                         </tbody>
            </table>
        </div>
    </div>
  </main>   
   <?php 
   if(isset($_POST['supprimer'])){
     require '../../vues/include/agent/form_delete.php';
   }
    ?>
</body>
</html>
