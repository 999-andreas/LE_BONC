<?php
include"modele.php";
echo "detail";
$id_annonce =$_GET["id_annonce"];



$valeur = new annonce();
$valeur = get_1annonce($_GET["id_annonce"],$db);
$source = "photos/".$valeur->photo;
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
        <a href='supr_annonce.php?id_annonce=<?php echo $id_annonce?>'>
        <input type="button" value="supprimer l'annonce">
    </div>
    
</body>
</html> 

