<?php




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
    <input type="radio" id="oui" name="oui" value="oui">
    <label for="html">supprimer l'annonce ?</label><br>
    <input type="radio" id="non" name="non" value="retour">
    <label for="html">retour</label><br>

</form>       
<?php
var_dump($_POST);
if($_POST['oui'])
{
    supr_annonce($db,$_GET["id_annonce"]);
}
else
{
}   
?>


</body>
</html>