<?php 
session_start();

if(isset($_POST["valider"])) {
    extract($_POST);
    $id = new PDO(
        'mysql:host=localhost;dbname=;charset=utf8',
        'root',
        ''
    );
    
    //on definit l'accreditation ici pour éviter un probleme de "definition" qui bloquerait le script
    $accreditation = $_SESSION["accreditation"];
    //l'accreditation  est définie de maniere automatoque dans PHPmyadmin, donc on peut le laisser en NULL car non-saisie par l'user
    $conecte =$id->prepare("insert into users values (NULL, '$prenom', '$nom', '$email', '$mdp', '$ville', '$rue', '$codepostale', '$pays', '$photo', '$accreditation')");
    $conecte->execute();

    echo"<h1> inscription réussi! </h1>";
    header("refresh:2; url=museeCON.php");
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
      <a href="museeCON.php">connection</a>
      <a href="museeINSC.php">inscription</a>
      <a href="déconnexion.php">Deconnexion</a>
  <div>
<header>
<body>

    

    <form action="" method="post">
      <h1> inscription </h1>
        <input type="text" name="prenom" placeholder="entrez un prenom" required>
        <br><br>
        <input type="text" name="nom" placeholder="entrez un nom" required>
        <br><br>
        <input type="text" name="email" placeholder="email" required>
        <br><br>
        <input type="password" name="mdp" placeholder="mot de passe" required>
        <br><br>
        <input type="text" name="ville" placeholder="ville" required>
        <br><br>
        <input type="text" name="rue" placeholder="rue" required>
        <br><br>
        <input type="text" name="codepostale" placeholder="codepostale" required>
        <br><br>
        <input type="text" name="pays" placeholder="pays" required>
        <br><br>
        <input type="file" name="photo" value="photo" required>
        <br><br>
        <input type="submit" name="valider" value="valider">

      <br><br>
      <h2> déjà un compte? </h2>
      <a href="museeCON.php"> Connectez-vous! </a>
    </form>
</body>
</html>