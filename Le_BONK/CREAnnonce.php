<?php
session_start();

var_dump($_SESSION[]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
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
    <fieldset>
    <legend>informations de votre annonce : </legend>

    <form action="traitement_ajout_annonce.php" method="post" enctype="multipart/form-data" >

      <input type="text" id="titre" name="titre", placeholder="titre :" required> *
      <br><br>
      <input type="number" id="prix" name="prix" min="0" placeholder="prix :" required> *
      <br><br>

      <label for="photo">choisir une photo (JPG,PNG,JPEG): </label>
      <input type="file" id = "photo" name="photo" required>*<br><br>

      <fieldset><legend></legend>
        selectionner votre categorie
        <select name="categories" >
        <option value=11>divers</option>  
        <option value=1>emploi</option>
        <option value=2>véhicule</option>
        <option value=3>immobilier</option>
        <option value=4>mode</option>
        <option value=5>maison</option>
        <option value=6>multimédia</option>
        <option value=7>loisirs</option>
        <option value=8>animaux</option>
        <option value=9>matériel pro</option>
        <option value=10>services</option>
        </select><br><br></fieldset><br>

      <textarea name="description" id="" cols="30" rows="8", placeholder="description :"></textarea>*
      <br><br>

      <input type="reset" value="effacer">
      <input type="submit" value="calculer">

    </fieldset>
      
    </form>
  
    <!--<p>Read the <a href="https://www.mozilla.org/en-US/about/manifesto/">Mozilla Manifesto</a> to learn even more about the values and principles that guide the pursuit of our mission.</p>-->
  </body>
</html>
<?php

var_dump($_SESSION);
?>