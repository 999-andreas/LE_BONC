<?php
        if (isset ($_POST["envoyer_mess"])){
            $montexte = $_POST["montexte"];
            $id_receveur=$id_user; 
            $id_annonce=$valeur->id_annonce;//la variable $id_annonce reçoit l'id_annonce 
            include ('insert_prem_message.php');
        }
?>