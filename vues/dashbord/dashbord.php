<?php  require_once '../../vues/include/header.php' ;
?>
<body>
    <div class="body">
<main>
<h5>RAPPORT PERIODIQUE <?= date("d/m/Y")?></h5>
    <section class="sect2">
           
             <div class="rp">
                <h4> <i class="fa fa-calendar"></i> mariage d'aujourdhui: <?=  $MariageAujourdhui?> </h4> 
                </div>

                <div class="rp">
                <h4> <i class="fa fa-calendar"></i>   mariage de la semaine: <?=  $MariageSemaine?> </h4> 
                </div>

                <div class="rp">
                <h4>  <i class="fa fa-calendar"></i>  mariages de ce mois :<?=  $mariageMois?> </h4>
                </div>

             <div class="rp">
                <h4>  <i class="fa fa-calendar"></i>  mariages de cette année: <?= $toutMariage?> </h4>         
             </div>
    </section>
    <section class="sect2">
           
           <div class="rp">
              <h4> <i class="fa fa-calendar"></i>  mariage publié d'aujourdhui: <?=  $publicationAujourdhui?> </h4> 
              </div>

              <div class="rp">
              <h4>  <i class="fa fa-calendar"></i>  mariage publié cette semaine: <?=  $publicationSemaine?> </h4> 
              </div>

              <div class="rp">
              <h4>   <i class="fa fa-calendar"></i>  mariage publié ce mois :<?=  $mariageMois?> </h4>
              </div>

           <div class="rp">
              <h4>   <i class="fa fa-calendar"></i> mariage publié cette année: <?= $publication?> </h4>         
           </div>
  </section>
 </main>
</body>
</div>
<style>
    .body{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 80vh;
    }
     main{
        background: white;
        height: 60vh;
        padding: 10px;
        width: 80%;
        box-shadow: 1px 1px 4px black;
     }
    h5{
        text-align: center;
        margin-top: 20px;
        padding: 20px;
        width: 500px;
        margin: auto;
        box-shadow: 1px 1px 4px black;
    }
    .sect2{
        display: flex;
        width: 90%;
        margin: 20px auto;
    }
    .sect2 .rp{
        box-shadow: 1px 1px 4px black;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        width: 500px;
        text-align: center;
    }
    .fa-calendar{
        color:darkblue;
    }
</style>