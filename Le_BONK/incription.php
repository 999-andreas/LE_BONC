<?php 
session_start();

if(isset($_POST["valider"])) {
    extract($_POST);
    $id = new PDO(
        'mysql:host=localhost;dbname=lebonkdb;charset=utf8',
        'root',
        ''
    );
    $nbmdp=strlen($mdp);
    if($nbmdp<10){
    echo"<h1> mot de passe trop cour + 10 caractere ! </h1>";}
    else{
    //on definit l'accreditation ici pour éviter un probleme de "definition" qui bloquerait le script
    $accreditation = 0;
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
<<header>
<<header>
    <nav>
        <div class="logo">
         <img src="lmd.png" alt="acceuil" style="width:60px">
         <a class ="logo" href=>LE BONK</a>
         <a href="accuille.php">

        </div>
        <div class="toggle">
        <i class="fas fa-bars ouvrir"></i>
        <i class="fas fa-times fermer"></i>
        </div>
        
        <ul class="menu">
        <li><a href="accuille.php">acceuil</a></li>&nbsp;&nbsp;
        <li><a href="contact.php">contact</a></li>&nbsp;&nbsp;
        <li><a href="CREAnnnonce.php">annonce</a></li>&nbsp;&nbsp;
        <li><a class="btn" href="conection.php">connection</a></li>&nbsp;
        <li><a class="btn-btn" href="incription.php">inscription</a></li>&nbsp;
        <li><a class="btn-btn" href="deconection.php">deconection</a></li>&nbsp;&nbsp;
        <li><a href="#"><img src="" alt=""></a></li>
        

        </ul>
      
    </nav>
</header>
<body>


    
    
    
        
    <form class="form-jh" action="" method="post">
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
      <a href="conection.php"> Connectez-vous! </a>
    </form>
</body>
</html>