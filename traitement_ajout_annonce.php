<?php
require "modele.php";

var_dump($_POST);

var_dump($_FILES);
var_dump(pathinfo($_FILES['photo']['name']));

$id_user = 83; /* à changer avec l'id dans $_SESSION*/

traitement_fichier();

send_annonce2($_POST['titre'],(int)$_POST['prix'],$_POST['description'],$_FILES['photo']['name'],$id_user,(int)$_POST['categories'],$db);


?>   