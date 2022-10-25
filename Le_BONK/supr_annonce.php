<?php
include "modele.php";
$id_annonce = $_GET["id_annonce"];

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
<form action="supr_annonce.php" method="post">
    <p>êtes vous sûr de suprimer l'annonce ?</p>
    <input type="radio" id="oui" name="choix" value="1">
    <label for="oui">OUI</label><br>
    <input type="radio" id="non" name="choix" value="2">
    <label for="non">NON</label><br>


    <input type="submit" value="confirmer">
</form>       
<?php
    if($_POST['choix']==1)
    {
        supr_annonce($db,$_GET['id_annonce']);
        header("location:accuille.php");
        exit();
    }
    elseif($_POST['choix']==2)
    {
        header("location:vue_detail_annonce.php?id_annonce=<?php echo $id_annonce?>");

    }
?>


</body>
</html>