<?php
require "modele.php";

$annonces = [];

$annonces = get_annonce($db);


$description = "non";
$id = 14;

$annonces[$id]->description = $description;

modif_annonce($db, $id, $annonces[$id]);



var_dump($annonces);




?>   