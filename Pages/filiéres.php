
<?php
   require_once("connexiondb.php");
   $requete="select * from filiere";
   $resultatF=$pdo->query($requete);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des filiéres</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/manstyle.css">

</head>
<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <div class="panel panel-success margetop">
          <div class="panel-heading">Rechercher des filiéres...</div>
          <div class=panel-body>
            <form method="get" action="filiéres.php" class="form-inline">
              <div class="form-group">
                <input type="text" name="name" placeholder="Taper le nom de filiére" class="form-control">
              </div>
              Niveau: 
              <select>
                 <option>Technicien spécialisé</option>
              </select>
              <input type="submit" value="Rechercher...">
            </form>
          </div>
        </div>

        <div class="panel panel-primary margetop">
          <div class="panel-heading">Liste des filiéres</div>
          <div class=panel-body>
           <table class="table table-striped table-bordered">
               <thead>
                  <tr>
                     <th>Id filiére</th><th>Nom filiére</th><th>Niveau</th>
                  </tr>
               </thead>

               <tbody>
                 
                   <?php while($filiere=$resultatF->fetch()){?> 
                    <tr>
                       <td><?php  echo $filiere['idFiliere'] ?></td>
                       <td><?php  echo $filiere['nomFiliere'] ?></td>
                       <td><?php  echo $filiere['niveau'] ?></td>
                    </tr> 
                   <?php }   ?>

               
               </tbody>
          </table>
          </div>
        </div>
   </div>
    
</body>
</html>