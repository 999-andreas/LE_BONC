<?php
include "modele.php";

$annonce = new annonce();
$annonce = get_1annonce(18,$db);
/* faudra prendre l'id de l'annonce concerné*/

var_dump($_POST);
var_dump($annonce);
var_dump($_FILES);

if($_FILES["photo"]["name"]== "")
{
    $photo = $annonce->photo;
    echo "hello";
}
else
{
    $photo = $_FILES['photo']['name'];
    echo "hello2";

    /*on test si le fichier est bien conforme*/
    $erreur = traitement_fichier();
    if ($erreur)
    {
        echo $erreur;
        header("Location: vue_modif_annonce.php");
        exit();
    }
}


modif_annonce(18, $_POST['titre'],(int)$_POST['prix'],$_POST['description'],(string)$photo,(int)$_POST['categories'],$db);

?>