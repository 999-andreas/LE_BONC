<?php
include "modele.php";


var_dump($_POST);



$annonces = [];
$annonces = get_annonce($db,(int)$_POST['categories'], (int)$_POST['prix_min'], (int)$_POST['prix_max']);
foreach($annonces as $valeur)
{
   include"vue_liste_annonce.php";
}



?>