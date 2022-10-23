<?php
include"modele.php";

$annonce_db = $db->prepare("SELECT prix FROM annonce ORDER BY prix ASC");
$annonce_db->execute();
$annonces_recup = $annonce_db->fetchAll();

?>


<html>
<form action="traitement_trie_annonce.php" method="post">

    <fieldset><legend>categorie </legend>
        selectionner votre categorie
        <select name="categories" >
        <option value=0>aucune categorie</option>
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

        <label for="prix_min">prix min: </label>
        <input type="number" id="prix_min" name="prix_min" min="<?=$annonces_recup[0]['prix']?>" placeholder="prix min:" value="<?=$annonces_recup[0]['prix']?>">

        <label for="prix_max">prix max: </label>
        <input type="number" id="prix_max" name="prix_max" max="<?=$annonces_recup[count($annonces_recup)-1]['prix']?>" placeholder="prix max:" value="<?=$annonces_recup[count($annonces_recup)-1]['prix']?>">
        <br><br>
        <input type="submit" value="Submit">
</form>


</html>

<?php
/*
<input type="checkbox" id="divers" name="divers" value="11">
        <label for="divers">divers</label><br>

        <input type="checkbox" id="emploi" name="emploi" value="1">
        <label for="emploi">emploi</label><br>

        <input type="checkbox" id="véhicule" name="véhicule" value="2">
        <label for="véhicule">véhicule</label><br>

        <input type="checkbox" id="immobilier" name="immobilier" value="3">
        <label for="immobilier">immobilier</label><br>

        <input type="checkbox" id="mode" name="mode" value="4">
        <label for="mode">mode</label><br>

        <input type="checkbox" id="maison" name="maison" value="5">
        <label for="maison">maison</label><br>

        <input type="checkbox" id="multimédia" name="multimédia" value="6">
        <label for="multimédia">multimédia</label><br>

        <input type="checkbox" id="loisirs" name="loisirs" value="7">
        <label for="loisirs">loisirs</label><br>

        <input type="checkbox" id="animaux" name="animaux" value="8">
        <label for="animaux">animaux</label><br>

        <input type="checkbox" id="matériel rpo" name="matériel rpo" value="9">
        <label for="matériel rpo">matériel rpo</label><br>

        <input type="checkbox" id="services" name="services" value="10">
        <label for="services">services</label><br><br>


*/
?>