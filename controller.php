<?php
require "modele.php";

var_dump($_POST);

$id_user = 83;


send_annonce2($_POST['titre'],(int)$_POST['prix'],$_POST['description'],$_POST['photo'],$id_user,(int)$_POST['categories'],$db);


?>   