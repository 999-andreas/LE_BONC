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
    <input type="checkbox" id="oui" name="oui" value="1" required>
    <label for="oui"> êtes vous sûr de supprimer l'annonce ?</label><br>
    <a href='vue_detail_annonce.php?id_annonce=<?php echo $id_annonce?>'>
    <input type="button" value="annuler">
    <input type="submit" value="confirmer">
</form>       
<?php
var_dump($_POST);
if($_POST['oui']==1)
{
    supr_annonce($db,$_GET['id_annonce']);
    header("location:accuille.php");
    exit();
}
?>


</body>
</html>