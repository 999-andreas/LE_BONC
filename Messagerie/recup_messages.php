<?php
    include("connexion.php");
    include("navbar.html");

    (int)$id_connect=1;
    $requete= "SELECT * FROM message WHERE id_receveur= $id_connect";
    $message_db = $db->prepare($requete);
    $message_db->execute();
    $recup_message=$message_db->fetchAll();

    foreach ($recup_message as $message)
    {
        ?>
        <fieldset>
        <?php echo $message['message']; ?> <br><br>
        ; ?>
        </fieldset>
        <button class="repondre" type="button">
            Répondre
        </button>
<?php

    }
    var_dump($recup_message);
?>    