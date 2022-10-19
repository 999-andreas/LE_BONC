<?php
    include("connexion.php");
    $requete='SELECT * FROM annonce';
    $annonce_db = $db->prepare($requete);
    $annonce_db->execute();
    $recup_annonce=$annonce_db->fetchAll();

    foreach ($recup_annonce as $annonce)
    {
        ?>
        <p><?php echo $annonce['description']; ?></p>

<?php

    }
?>    