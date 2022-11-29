<?php require_once 'controller/login/login.php' ?>
<link rel="stylesheet" href="vues/css/bootstrap.min.css">
<link rel="stylesheet" href="vues/css/fontawesome/css/all.min.css">

 <body>
        <div class="content">
             <form action="" method="post" class="form">
              <div class="titre">
                  <h4>Se connecter</h4>
                  </div> 
                  <hr>
                  <div class="item">
                     <label for=""> NOM D'UTILISATEUR</label> <br>
                     <input type="text" name="username" class="form-control">
                  </div>
                  <div class="item">
                     <label for=""> MOT DE PASSE</label> <br>
                     <input type="password" name="password" class="form-control">
                  </div>
                  <div class="item"> 
                     <button type="submit" name="connexion" class="btn btn-primary"> CONNEXION</button>
                  </div>
                    <h5><?= isset($message)?$message:'' ?></h5>
             </form>
        </div>
 </body>
  <style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 100vh;
        margin: auto;
        background: gray;
    }
    .content{
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        width: 50%;
        height: 50vh;
        background: white;
        box-shadow: 1px 1px 5px black;
        border-radius: 4px 8px;
    }
    .form{
        width: 80%;
    }
    .form h4{
            text-shadow: 1px 2px 3px gray;
            /* color: burlywood; */
            color: darkblue;
            font-size: 2.3em;
    }
    /* .form .titre{
        position: absolute;
        top: -50px;
        right: 30%;
        border-radius: 15px 10px;
        background: white;
        box-shadow: 1px 1px 5px black;
        padding: 20px;
    } */
    .form .item{
        margin: 10px;
    }
    h5{
        text-align: center;
        color: red;
    }
  </style>