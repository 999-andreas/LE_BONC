<?php /*session_start();
if(isset($_POST["$_SESSION"])) { 
extract($_POST);
$id = new PDO(
  'mysql:host=localhost;dbname=lebonkdb;charset=utf8',
    'root',
    ''
);
$conecte =$id->prepare("select photo from users where id_user=$_SESSION");
$conecte->execute();
$res=$conecte->fetchALL();
$photo1=$res
if($_SESSION=="NUll")
$photo1="<img src=""lm.jpg"" alt="">"
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=Stylesheet type="text/css" href=style.css>
    <link rel="stylesheet" href="header.css">
</head>

<<header>
    <nav>
        <div class="logo">
         <img src="lmd.png" alt="acceuil" style="width:60px">
         <a class ="logo" href=>LE BONK</a>
         <a href="accuille.php">

        </div>
        <div class="toggle">
        <i class="fas fa-bars ouvrir"></i>
        <i class="fas fa-times fermer"></i>
        </div>
        
        <ul class="menu">
        <li><a href="accuille.php">acceuil</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a href="CREAnnnonce.php">annonce</a></li>
        <li><a class="btn" href="conection.php">connection</a></li>
        <li><a class="btn-btn" href="incription.php">inscription</a></li>
        <li><a href="#"><img src="" alt=""></a></li>
        

        </ul>
      
    </nav>
</header>
<body>
  

</body>
</html>
