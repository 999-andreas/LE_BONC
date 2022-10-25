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

    ?>

    <section class='>
  <div class=' container'>
        <h1 class='text-center pt-4' id='><span>Mes favories</h1>
      <div class=' row row-cols-1 row-cols-md-2 g-4'>

            <?php
            $id = mysqli_connect("127.0.0.1:3307", "root", "", "lebonbd");
            $iden = $_GET["iden"];
            $req = "select * from favorie where Id_user= $iden";
            $res = mysqli_query($id, $req);
            while ($line = mysqli_fetch_assoc($res)) {
                $req1 = "select * from annonce where id_annonce = $line[id_annonce]";
                $res1 = mysqli_query($id, $req1);
                while ($ligne = mysqli_fetch_assoc($res1)) {
                    echo "<div class='col'>
                <a href='Produit.php?idP= $ligne[id_annonce] && iuser=$iden' class='text-decoration-none link-dark'>
                <div class='card'>
                     <img src='$ligne[image]' class='card-img-top' alt='Hollywood Sign on The Hill'/></a>
                    <div class='card-body'>
                           <div class='row'>
                                          <div class='col-6'>
                                            <h5 class='card-title'>$ligne[modele_annonce]</h5></div>
                                            <div class='col-4'>
                                               <h5 class='card-title text-justify-end'>$ligne[prix_annonce]€</h5>
                                          </div>
                                          
                                          
                                         <div class='col-2 px-3'>
                                         <a href='like.php?iduser=$iden && idannonce=$ligne[id_annonce]' class='text-decoration-none text-dark'>
                                           <i class='bi bi-suit-heart-fill'>$ligne[nbLike_annonce]</i></a>
                                           <a href='sup.php?iduser=$iden && idannonce=$ligne[id_annonce]' class='text-decoration-none text-dark''><i class='bi bi-trash-fill'></i>
                                           </a>
                                           </div>


                                    
                                   </div>
                                   <p class='card-text'>$ligne[anneeModel].$ligne[boite_annonce].$ligne[annonce] </p>
                             
                           </div>
                           </div>
                    </div>";
                }
            }
            ?>
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>