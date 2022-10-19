<?php 
session_start();

if (isset($_POST["confirmer"])) {
    extract($_POST);
    $id = new PDO(
      'mysql:host=localhost;dbname=lebonkdb;charset=utf8',
        'root',
        ''
    );
    $conecte =$id->prepare("select* from users where email='$email' and mdp='$mdp' ");
    $conecte->execute();
    $res=$conecte->fetchA();

    //variable de session qu'on va reprendre tout au long du projet!
    $_SESSION=mysqli_fetch_assoc($res);
    $prenom = $_SESSION["prenom"];
    $accreditation = $_SESSION["accreditation"];
    
    // Si mdp/emil saisi -> correct par rapport à la BDD
    if (mysqli_num_rows($res)>0) {
        //alors laisser rentrer l'user en fonction de son niveau d'accreditation
        //le niveau 1 est automatiquement attribué à tous les users!
        //pour définir un admin il faut aller dans phpmyadmin et le faire à la main
        if ($_SESSION["accreditation"] == 0){ // le niveau 0 correspond aux clients
            echo"<h1> bienvenu $prenom ! </h1>";
            header("refresh:2;url=accueil.php");
        } 
        //le niveau 2 se defini manuellement dans PHPmyadmin, il faut donc qu'un responsable aille mettre un "2" dans : "accreditation"
        else if($_SESSION["accreditation"] == 1) {//le niveau 1 correspond aux admins!
            echo"<h1> Ravi de vous revoir $prenom ! </h1>";
            header("refresh:2;url=acceuilADMIN.php");
        }
        
    } else {
        //Si mdp/email -> incorrect, alors refuser accès!
        echo"<h1> Mauvais mot de passe ou mauvais identifiant! veuillez ressayer! </h1>";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <title>Document</title>
</head>
<header>
  <div class="header">
    <a href="accueil (1).html">
      <img src="logo.png" alt="acceuil" style="width:60px">
    </a>
      <a href="accueil (1).html">Acceuil</a>
      <a href="Visite.php">Visite</a>
      <a href="Billeterie.php">Billeterie</a>
      <a href="contact.php">contact</a>
      <a href="museeCON.php">connexion</a>
      <a href="museeINSC.php">inscription</a>
      <a href="déconnexion.php">Deconnexion</a>
  <div>
<header>
<body>
   <div class="container">
      <form action="" method="post">
        <h1> connexion </h1>
    
        
        <input type="text" name="email" placeholder="email" required>
        <br><br>
        <input type="password" name="mdp" placeholder="mot de passe" required>
        <br><br>
        <input type="submit" name="confirmer" value="confirmer">
        <br><br>
       
        <br><br>
       <h2> Pas de compte? </h2>
        <a href="museeINSC.php"> inscrivez-vous! </a>
      </form>
    </div>
</body>

</html>