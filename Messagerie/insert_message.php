<?php
    include("connexion.php");
    
    $requete= "INSERT INTO `message` VALUES (NULL, '$montexte', '$id_receveur', '$id_envoi', '$id_annonce')"; 
    $message_db = $db->prepare($requete);
    $message_db->execute();
    echo "message intégré, vas voir!"
?>

