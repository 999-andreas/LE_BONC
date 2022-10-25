<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
</head>
<?php include "le_header.html"; ?>
<body>
   <div class="container">
   <form class="form" action="traitement_conec_user.php" method="post">
        <h1> connexion </h1>
    
        
        <input type="text" name="email" placeholder="email" required>
        <br><br>
        <input type="password" name="mdp" placeholder="mot de passe" required>
        <br><br>
        <input type="submit" name="confirmer" value="confirmer">
        <br><br>
       
        <br><br>
       <h2> Pas de compte? </h2>
        <a href="incription.php"> inscrivez-vous! </a>
      </form>
    </div>
</body>

</html>