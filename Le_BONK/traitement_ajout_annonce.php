<?php
session_start();
include "modele.php";

var_dump($_POST);

$id = 84;

$erreur = traitement_fichier();

if ($erreur)
{
    echo $erreur;
    header("Location: CREAnnonce.php");
    exit();
}

send_annonce2($_POST['titre'],(int)$_POST['prix'],$_POST['description'],$_FILES['photo']['name'],$id,(int)$_POST['categories'],$db);

header("location:accuille.php");
exit();
?>   