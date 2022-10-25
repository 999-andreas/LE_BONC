<?php 
session_start();

include "modele.php";

if(isset($_POST["valider"])) {
    extract($_POST);
    
    $nbmdp=strlen($mdp);
    if($nbmdp<10)
    { 
        echo"<h1> mot de passe trop court + 10 caractere ! </h1>";
        #echo "mauvais mot de passe ou mail";
        header("refresh:3 ;url=inscription.php");
        exit();
       
    }
    else{
    //on definit l'accreditation ici pour éviter un probleme de "definition" qui bloquerait le script
    $accreditation = 0 ;#$_SESSION["accreditation"];
    //l'accreditation  est définie de maniere automatoque dans PHPmyadmin, donc on peut le laisser en NULL car non-saisie par l'user
    $conecte =$id->prepare("insert into users values (NULL, '$prenom', '$nom', '$email', md5('$mdp'), '$ville', '$rue', '$codepostale', '$pays', '$photo', '$accreditation')");
    $conecte->execute();

    echo"<h1> inscription réussi! </h1>";
    header("refresh:2; url=conection.php");}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
</head>
<?php include "le_header.html"; ?>
<body>
    <form class="form-jh" action="" method="post">
      <h1> inscription </h1>
        <input type="text" name="prenom" placeholder="entrez un prenom" required>
        <br><br>
        <input type="text" name="nom" placeholder="entrez un nom" required>
        <br><br>
        <input type="email" name="email" placeholder="email" required>
        <br><br>
        <input type="password" name="mdp" placeholder="mdp (+10 caractères)" required>
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
      <a href="vue_connexion.html"> Connectez-vous! </a>
    </form>
</body>
</html>