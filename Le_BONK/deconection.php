<?php
session_start(); 
echo "<h1> Deconnexion en cours... veuillez patienter. </h1> ";
session_destroy(); // permet de se deconnecter
header("refresh:3; url=museeCON.php"); 
?>