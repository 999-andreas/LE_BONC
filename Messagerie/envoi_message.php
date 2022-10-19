<?php
    include("connexion.php");
    $id_connect=83;
    $text="bla bla yeet";
    $requete="INSERT INTO message (nom_colonne_1, nom_colonne_2, ...
    VALUES ('valeur 1', 'valeur 2', ...)";
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