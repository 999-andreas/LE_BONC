
<!DOCTYPE html>
<html>
  <head>
      
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
    <h1>Prêts</h1>
    <!--<img src="images/test.png" alt="c'est le test.">-->

    <!--<p>At Mozilla, we’re a global community of</p>-->
    <fieldset>
    <legend>Les caracteristique de votre pret : </legend>

    <form action="controller.php" method="post">

      <input type="text" id="titre" name="titre", placeholder="titre :" required> *<br><br>
      <input type="text" id="prix" name="prix", placeholder="prix :" required> *<br><br> <!-- faire un petit slider-->
    
      <!-- <input type="checkbox" name="Assurance" value="assurance"><br><br> -->

      <input type="file" id = "photo" name="photo" value="photo"><br><br>

      <fieldset><legend>categorie </legend>
        selectionner votre categorie
        <select name="categories">
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
        <option value=11>divers</option>
        </select><br><br></fieldset><br><br>

      <textarea name="description" id="" cols="30" rows="8", placeholder="description :"></textarea>*<br><br>

      <input type="reset" value="effacer">
      <input type="submit" value="calculer">

    </fieldset>
      
    </form>
  
    <!--<p>Read the <a href="https://www.mozilla.org/en-US/about/manifesto/">Mozilla Manifesto</a> to learn even more about the values and principles that guide the pursuit of our mission.</p>-->
  </body>
</html>

<?php
/*faire des trucs comme ca pour avoir des briques modualaire*/ 
/*exemple tres simples pour afficher une annonce*/