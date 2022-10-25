<?php
    include('connexion.php');

    $requete= "SELECT * FROM message, users, annonce WHERE id_receveur= $id_connect AND message.id_envoi=users.id_users AND annonce.id_annonce=message.id_annonce 
    UNION
    SELECT * FROM message, users, annonce WHERE id_envoi=$id_connect AND message.id_receveur=users.id_users AND annonce.id_annonce=message.id_annonce"; // on sélectionne les messages de l'utilisateur connecté
    $message_db = $db->prepare($requete); //prépare la requete pour sécuriser la requete
    $message_db->execute(); //execute la requete
    $recup_message=$message_db->fetchAll(); //va chercher les infos dans la requête, et les stocke dans un tableau, $recup_message

    
?>