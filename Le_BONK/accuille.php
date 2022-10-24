<?php /*session_start();
if(isset($_POST["$_SESSION"])) { 
extract($_POST);
$id = new PDO(
  'mysql:host=localhost;dbname=lebonkdb;charset=utf8',
    'root',
    ''
);
$conecte =$id->prepare("select photo from users where id_user=$_SESSION");
$conecte->execute();
$res=$conecte->fetchALL();
$photo1=$res
if($_SESSION=="NUll")
$photo1="<img src=""lm.jpg"" alt="">"
*/

session_start();

include "modele.php";

$annonce_db = $db->prepare("SELECT prix FROM annonce ORDER BY prix ASC");
$annonce_db->execute();
$annonces_recup = $annonce_db->fetchAll();

/*valeur par défaut prix_min et max et categorie*/ 
var_dump($_SESSION);
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
    <form action="accuille.php" method="post">

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
        <input type="submit" value="afficher les annonces">
    </form>
    <?php
        if(!empty($_POST))
        {
            $annonces = [];
            $annonces = get_annonce($db,(int)$_POST['categories'], (int)$_POST['prix_min'], (int)$_POST['prix_max']);
            foreach($annonces as $valeur)
            {
                include"vue_liste_annonce.php";
            }
        }
    ?>


    
</body>
</html>

<?php
var_dump($_SESSION);
?>