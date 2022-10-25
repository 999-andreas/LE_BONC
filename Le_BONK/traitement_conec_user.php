<?php 
session_start();

include "modele.php";

extract($_POST);


/* prendre tout les utilisateurs et check si les inputs correspodent à quelque chose 
   si c'est pas le cas renvoyer vers la connection si oui renvoyer vers l'accuille*/
$conecte =$db->prepare("SELECT * from users where email= '$email' and mdp=md5('$mdp') ");
$conecte->execute();
$res=$conecte->fetchALL();

if(isset($res))
{
    $_SESSION["id_user"]=$res[0]['id_users'];
    var_dump($_SESSION);
    header("refresh:2 ;url=accuille.php");

}
else
{
    header("refresh:2 ;url=vue_connexion.php");
}
//variable de session qu'on va reprendre tout au long du projet!


