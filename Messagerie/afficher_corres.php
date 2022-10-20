<?php
    include("connexion.php");
    $user_nom="Wellers";
    $user_prenom='Antoine';
    //$user_prenom=$_SESSION["prenom"];
    //$user_nom=$_SESSION["nom"];
    $req = "SELECT * FROM users WHERE prenom='$user_prenom'";
    $liste_conv = $db->prepare($req);
    $liste_conv->execute();
    $recup_liste=$liste_conv->fetchAll();
    foreach ($recup_liste as $correspondant)
    {

        echo $correspondant["prenom"];

    }
?>
  