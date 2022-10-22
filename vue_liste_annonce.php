<?php
$source = "photos/".$valeur->photo;

$lien = $valeur->id_annonce;

?>


<html>
<h1><?php echo $valeur->titre." "; echo $valeur->prix." €"?></h1>
<img src="<?php echo "$source"?>" width="300" height="200">

<a href='vue_detail_annonce.php?id_annonce="<?php echo $valeur->id_annonce?>"'>
<input type="button" value="detail">
</a>
 

</html>