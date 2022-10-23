<?php
    include("connexion.php");
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <select name="correspondant">
        <?php
        (int)$id_user=1;
        $user_nom="Wellers";
        $user_prenom="Antoine";
        //$user_prenom=$_SESSION["prenom"];
        //$user_nom=$_SESSION["nom"];
        $req ="SELECT DISTINCT nom,prenom,email FROM users, message WHERE message.id_receveur=$id_user AND users.id_users!=$id_user AND users.id_users=message.id_envoi  ";
        $liste_conv = $db->prepare($req);
        $liste_conv->execute();
        $recup_liste=$liste_conv->fetchAll();
        foreach ($recup_liste as $correspondant)
        {
            echo '<option value="correspondant">'. $correspondant['prenom']." " . $correspondant['nom']. '</option>';
        }

        
        ?>
        </select>
        <?php
        var_dump($recup_liste);
        ?>
    </body>
    </html>