<?php
require "modele.php";
/*
$annonces = [];

$annonces = get_annonce($db);


$description = "non";
$id = 14;

$annonces[$id]->description = $description;

modif_annonce($db, $id, $annonces[$id]);



var_dump($annonces);
*/

$cate = ['emploi','véhicules','immobilier','mode','maison','multimédia','loisirs','animaux','matériel professionnel','services','autres'];
foreach($cate as $value)
{
    $annonce_db = $db->prepare("insert into categorie, values (NULL, '$value')");
    $annonce_db->execute();
}




?>   