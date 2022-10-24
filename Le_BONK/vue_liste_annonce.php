<?php
$source = "photos/".$valeur->photo;

$lien = $valeur->id_annonce;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<div>
    <h1><?php echo $valeur->titre." "; echo $valeur->prix." €"?></h1>
    <img src="<?php echo "$source"?>" width="300" height="200">

    <a href='vue_detail_annonce.php?id_annonce="<?php echo $valeur->id_annonce?>"'>
    <input type="button" value="detail">
    </a>
</div>

 
</html>