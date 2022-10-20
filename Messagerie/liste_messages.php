<?php
    session_start();
    include("navbar.html");
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
    
    
        <?php
            include ("recup_messages.php");?>

            <form action ="recup.php" method="post">
        
                <input type="radio" name="genre" value="Madame"> Madame
                <input type="radio" name="genre" value="NB"> Non-Binaire <br><br>
                <input type="text" name="nom" placeholder="Entrez votre nom : " required> * <br><br>
                <textarea name="message" placeholder="Messages" cols="30" rows="10"></textarea><br><br>

                <?php
                        $user_nom="Wellers";
                        $user_prenom="Antoine";
                        //$user_prenom=$_SESSION["prenom"];
                        //$user_nom=$_SESSION["nom"];
                        $req = "SELECT * FROM users WHERE prenom='$user_prenom'";
                        $liste_conv = $db->prepare($req);
                        $liste_conv->execute();
                        $recup_liste=$liste_conv->fetchAll();
                        foreach ($recup_liste as $correspondant)
                        {
                            ?>
                                <?php echo $correspondant["prenom"]; ?>
                        <?php
                        }
                        ?>    
                <fieldset><legend>niveau </legend>
                    selectionner votre niveau
                    <select name="niveau">
                    <?php

                        $user_prenom=$_SESSION["prenom"];
                        $user_nom=$_SESSION["nom"];
                        $req = "SELECT prenom, nom, email FROM users WHERE 'prenom'='$user_prenom' AND nom='$user_nom'";
                        $liste_conv = $db->prepare($req);
                        $liste_conv->execute();
                        $recup_liste=$liste_conv->fetchAll();
                        foreach ($recup_liste as $correspondant)
                        {
                                echo '<option value="' . $correspondant['prenom'] . '">' . $correspondant['nom'] . " " . $correspondant['email'] . '</option>';?>

                    <option value="bac">bac general</option>
                    <option value="bac +1">bac +1</option>
                    <option value="bac +2">bac +2</option>
                    <option value="Bac +3">Bac +3</option>
                </select><br><br></fieldset>
            </form>

    <?php
                        }

    ?>
    
    </body>
</html>
