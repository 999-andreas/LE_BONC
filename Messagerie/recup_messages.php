<?php
    include("connexion.php");
    include("navbar.html");

    (int)$id_connect=3; //on remplacera ceci par la variable SESSION une fois le code réuni
    $requete= "SELECT * FROM message, users, annonce WHERE id_receveur= $id_connect AND message.id_envoi=users.id_users AND annonce.id_annonce=message.id_annonce 
    UNION 
    SELECT * FROM message, users, annonce WHERE id_envoi=$id_connect AND message.id_receveur=users.id_users AND annonce.id_annonce=message.id_annonce"; // on sélectionne les messages de l'utilisateur connecté
    $message_db = $db->prepare($requete); //prépare la requete pour sécuriser la requete
    $message_db->execute(); //execute la requete
    $recup_message=$message_db->fetchAll(); //va chercher les infos dans la requête, et les stocke dans un tableau, $recup_message
    
    foreach ($recup_message as $message)
    {
        ?>
        <fieldset name="titre_annonce">
        <?php
            if ($message['id_auteur']!=$id_connect){
                echo $message['prenom']. " ". $message['nom'];?> <br><br> <?php //si l'utilisateur connecté 
            }
            echo $message['titre']; //affiche le titre de l'annonce.
        ?>
        <fieldset name="conversation">
        <?php 
        
        echo $message['message']; //affiche le message  ?> <br><br>
        <?php
            if ($message['id_auteur']==$id_connect){
                echo $message['prenom']. " ". $message['nom']; //affiche le nom et prenom du correspondant qui a envoyé le message
            }
        ?>
        </fieldset>
        <?php
            if($message['id_auteur']!=$id_connect){
                include('reponse.html');
            }
        ?>
        </fieldset>
        
<?php

    }
    if (isset ($_POST["envoyer_mess"])){
        $montexte = $_POST["montexte"];
        if ($id_connect==$message['id_receveur']){
            $id_receveur=$message['id_receveur'];
            $id_envoi=$message['id_envoi'];
        }
        if ($id_connect==$message['id_envoi']){ //si l'utilisateur connecté est celui de l'id_envoi, alors affecte les valeurs nécessaires d'id pour le insert
            $id_receveur=$message['id_receveur'];
            $id_envoi=$id_connect;
        }
        $id_annonce=$message['id_annonce'];//la variable $id_annonce reçoit l'id_annonce concernant le message auquel il répond
        include("insert_message.php"); //inclue le fichier qui fait la requête sql qui insert dans la bdd le message
        header("recup_messages.php");
    }

    var_dump($recup_message);
?>    