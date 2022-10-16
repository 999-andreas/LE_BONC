<?php
require "modele.php";

$annonces = [];

$annonces = get_annonce($db);

var_dump($annonces);

?>