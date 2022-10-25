<?php
session_start();

if(!isset($_SESSION["id_user"]))
{
    header("location: conne.html");
}

?>


<!DOCTYPE html>
<html>
  <head>
      
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
    <h1>Ajout d'une annonce</h1>

    <fieldset>
    <legend>informations de votre annonce : </legend>

    <form action="traitement_ajout_annonce.php" method="post" enctype="multipart/form-data" >

      <input type="text" id="titre" name="titre", placeholder="titre :" required> *
      <br><br>
      <input type="number" id="prix" name="prix" min="0" placeholder="prix :" required> *
      <br><br>

      <label for="photo">choisir une photo (JPG,PNG,JPEG): </label>
      <input type="file" id = "photo" name="photo" required>*<br><br>

      <fieldset><legend>categorie </legend>
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