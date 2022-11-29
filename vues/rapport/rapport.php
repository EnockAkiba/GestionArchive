
<?php  require_once '../../vues/include/header.php' ;
 $organisation= new MainClass();
 $table=$organisation->Afficher("versement");
?>
<script src="../../vues/include/projet/javascript.js"></script>
<body id="body">
   <main>
  <div class="formulaire" id="formulaire">
     <div class="titre">
                    <h3>  <?= isset($_POST['modifier'])?'MODIFIER UN RAPPORT' : 'AJOUTER UN  RAPPORT' ?> </h3>
                   <div class="right">
                              <label onclick="cache()"><i class="fa fa-eye-slash"></i></label>
                    </div>
     </div>
     <?php 
        if(isset($_POST['modifier'])){
          require '../../vues/include/rapport/form_update.php';
        }else{
       require '../../vues/include/rapport/form.php'  ;
        }
       ?>
    </div>=
      <div class="formulaire tables" id="table">
               <div  class="cher">
                  <form action="" method="post" class="form">
                             <h5> <a href=""> <i class="fa fa-refresh"></i> </a> <?= isset($count)?$count.'rapport':count($table).'rapport enregistrés' ?> </h5>
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
                              
                          
                                <th>Agent</th>
                                <th>Projet</th>
                                <th>Tittre rapport</th>
                                <th>Contenu </th>
                                 <th>Action</th>
                          </tr>
                        </thead>
                         <tbody>
                           <?php  
                           require '../../vues/include/rapport/table.php'
                       ?>
                         </tbody>
            </table>
        </div>
    </div>
  </main>   
   <?php 
   if(isset($_POST['supprimer'])){
     require '../../vues/include/rapport/form_delete.php';
   }
    ?>
</body>
</html>
