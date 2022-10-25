<?php
    session_start();

    //$id_connect= $_SESSION['id_users'];
    (int)$id_connect=$_SESSION['id_user']; //on remplacera ceci par la variable SESSION une fois le code réuni
    
    include("select_messages.php");   
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
?>    