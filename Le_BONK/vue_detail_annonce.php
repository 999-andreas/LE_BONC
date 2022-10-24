<?php
include"modele.php";
echo "detail";
$valeur = new annonce();
$valeur = get_1annonce($_GET["id_annonce"],$db);
$source = "photos/".$valeur->photo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
    <title>details</title>
</head>
<header>
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
        <li><a href="CREAnnonce.php">annonce</a></li>&nbsp;&nbsp;
        <li><a class="btn" href="conection.php">connection</a></li>&nbsp;
        <li><a class="btn-btn" href="incription.php">inscription</a></li>&nbsp;
        <li><a class="btn-btn" href="deconection.php">deconection</a></li>&nbsp;&nbsp;
        <li><a href="#"><img src="" alt=""></a></li>&nbsp;&nbsp;
        

        </ul>
      
    </nav>
</header>
<body>
    <h1><?php echo $valeur->titre." "; echo $valeur->prix." €"?></h1>
    <img src="<?php echo "$source"?>" width="300" height="200">
    <p><?php echo $valeur->description?></p>
    <a href='supr_annonce.php?id_annonce="<?php $_GET["id_annonce"]?>"'>
    <input type="button" value="detail">
</body>
</html>