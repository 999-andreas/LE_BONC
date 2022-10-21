<?php
include "modele.php";

$annonce = new annonce();
$annonce = get_1annonce(18,$db);
/* faudra prendre l'id de l'annonce concerné*/

var_dump($_POST);
var_dump($annonce);
var_dump($_FILES);

$photo = $annonce->photo;

if($_FILES["photo"]["name"]== "")
{
    echo "hello";
    modif_annonce(18, $_POST['titre'],(int)$_POST['prix'],$_POST['description'],(string)$photo,(int)$_POST['categories'],$db);
}
else
{
    echo "hello2";
    /*aussi enregistrer la nouvelle photo*/
    modif_annonce(18, $_POST['titre'],(int)$_POST['prix'],$_POST['description'],$_FILES['photo']['name'],(int)$_POST['categories'],$db);
}


?>