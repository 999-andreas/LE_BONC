<?php
    include("connexion.php");
    $id_connect=1;
    $requete2= "SELECT * FROM message WHERE id_receveur= $id_connect";

    $requete='SELECT * FROM message';
    $message_db = $db->prepare($requete2);
    $message_db->execute();
    $recup_message=$message_db->fetchAll();

    foreach ($recup_message as $message)
    {
        ?>
        <p><?php echo $message['message']; ?></p>

<?php

    }
?>    