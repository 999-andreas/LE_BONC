<?php
    include("connexion.php");
    include("navbar.html");

    (int)$id_connect=1; //on remplacera ceci par la variable SESSION une fois le code réuni
    $requete= "SELECT * FROM message, users WHERE id_receveur= $id_connect AND message.id_envoi=users.id_users"; // on sélectionne les messages de l'utilisateur connecté
    $message_db = $db->prepare($requete);
    $message_db->execute();
    $recup_message=$message_db->fetchAll();
    
    foreach ($recup_message as $message)
    {
        ?>
        <fieldset>
        <?php echo $message['message']; ?> <br><br>
        <?php

            echo $message['prenom']. " ". $message['nom'];
        ?>
        </fieldset>
        <form action="recup_messages.php" method="post">
        <p>
        <label ...>Entrez votre message :</label>
        <textarea name="montexte" id="montexte" ...></textarea>
        </p>
        <p>
        <input type="submit" name="envoyer_mess" value="Répondre" />
        </p>
        <?php
            if (isset ($_POST["montexte"])){
                $reponse = $_POST["montexte"];
            }
        ?>
        </form>
        
<?php

    }
    var_dump($recup_message);
?>    