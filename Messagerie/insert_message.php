<?php
    include("connexion.php");
    
    $requete= "INSERT INTO `message` VALUES (NULL, '$montexte', '$id_receveur', '$id_envoi', '$id_annonce', '$id_connect')"; 
    $message_db = $db->prepare($requete);
    $message_db->execute();
    echo '<script>alert("Message bien envoyé!!")</script>'; //popup pour confirmer l'envoi du message
?>

