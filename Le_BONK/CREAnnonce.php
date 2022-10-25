<?php

session_start();
if(!isset($_SESSION['id_user']))
{
    header("location:vue_connexion.php");
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
    <title>Document</title>
</head>
<?php include "le_header.html"; ?>
<body>
    <fieldset>
    <legend>informations de votre annonce : </legend>

    <form class="form" action="traitement_ajout_annonce.php" method="post" enctype="multipart/form-data" >

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

      <textarea name="description" id="" cols="30" rows="8", placeholder="description :" required></textarea>*
      <br><br>

      <input type="reset" value="effacer">
      <input type="submit" value="calculer">
      
    </fieldset>
      
    </form>
  
  </body>
</html>