<?php
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

        <fieldset><legend>niveau </legend>
            selectionner votre niveau
            <select name="niveau">
            <?php
                 $req = "select distinct animaux from dbpartiel order by type";
                 $res = mysqli_query($id,$req);
                 while($ligne = mysqli_fetch_assoc($res))
                 {
                 
                 ?>
            <option value="bac">bac general</option>
            <option value="bac +1">bac +1</option>
            <option value="bac +2">bac +2</option>
            <option value="Bac +3">Bac +3</option>
        </select><br><br></fieldset>

        Certifications:
            <input type="checkbox" name="certif[]" id="Azure">Azure
            <input type="checkbox" name="certif[]" id="Cisco">Cisco
            <input type="checkbox" name="certif[]" id="AWS">AWS <br><br>
        <input type="submit" value="Envoyer" >
    </form>

    <?php


    ?>
    
</body>
</html>