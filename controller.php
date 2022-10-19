<?php
require "modele.php";

var_dump($_POST);
$id_user = 83;



$annonce = [$_POST['titre'], $_POST['prix'], $_POST['description'], $_POST['photo'], $id_user, (int)$_POST['categories']];


$annonce_db = $db->prepare("insert into annonce values (NULL, '$annonce[0]', '$annonce[1]', '$annonce[2]', '$annonce[3]', '$annonce[4]', '$annonce[5]')");
$annonce_db->execute();


?>   