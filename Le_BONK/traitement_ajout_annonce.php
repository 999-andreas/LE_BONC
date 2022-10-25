<?php
session_start();
include "modele.php";

var_dump($_POST);

$id_user = 84;#$_SESSION["id_user"];

$erreur = traitement_fichier();

if ($erreur)
{
    echo $erreur;
    header("Location: vue_ajout_annonce.html");
    exit();
}

send_annonce2($_POST['titre'],(int)$_POST['prix'],$_POST['description'],$_FILES['photo']['name'],$id_user,(int)$_POST['categories'],$db);

#header("location:accuille.php");
#exit();
?>   