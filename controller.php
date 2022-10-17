<?php
require "modele.php";

$annonces = [];

$annonces = get_annonce($db);



for($k=0;$k<count($annonces);$k++)
{
    $titre = $annonces[$k]->titre;
    $description = $annonces[$k]->description;
    include "vue.php";
}

#var_dump($annonces);

?>   