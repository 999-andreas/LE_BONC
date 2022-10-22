<?php
include "modele.php";


var_dump($_POST);



$tab = [];
$tab = get_annonce($db,(int)$_POST['categories'], (int)$_POST['prix_min'], (int)$_POST['prix_max']);

var_dump($tab);



?>