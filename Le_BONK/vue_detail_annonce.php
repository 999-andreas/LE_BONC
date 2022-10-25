<?php
include"modele.php";
echo "detail";
$id_annonce =$_GET["id_annonce"];



$valeur = new annonce();
$valeur = get_1annonce($_GET["id_annonce"],$db);
$source = "photos/".$valeur->photo;
$id_user=$valeur->id_user;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
    <title>details</title>
</head>
<?php include "le_header.html"; ?>
<body>
    <div class="div">
        <h1><?php echo $valeur->titre." "; echo $valeur->prix." €"?></h1>
        <img src="<?php echo "$source"?>" width="300" height="200">
        <p><?php echo $valeur->description?></p>
        <form action="" method="post">
        <p>êtes vous sûr de suprimer l'annonce ?</p>
        <input type="radio" id="oui" name="choix" value="1">
        <label for="oui">OUI</label><br>
        <input type="radio" id="non" name="choix" value="2">
        <label for="non">NON</label><br>
        <input type="submit" value="confirmer">
        <?php include "Messagerie/envoyer_mess.html"?>
    </div>
    
</body>
</html> 
<?php 
    if(isset($_POST['choix']))
    {
        if($_POST['choix']==1)
        {
            supr_annonce($db,$id_annonce);
            header("location:accuille.php?>");
            exit();
        }
        elseif($_POST['choix']==2)
        {
            header("location:accuille.php?>");
            exit();

        }
    }
        

?>

