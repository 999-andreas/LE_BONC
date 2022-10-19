<?php

require "co_PDO.php";

/*A FAIRE :
    fonction pour :
        supprimer une annonce
        modifier une annonce
        avoir une liste de toute les annonces
        mettre une annonce en favoris ?

REMARQUE :        
module sert seulement a comuniquer avec la bdd
fitre par critères dans le controller 

je sais pas comment on relie les different pages a des fonctions dans le controller...
*/


// sera dans "module", les methode seront utilisé par "controller" et envoyé vers "vue"
class annonce 
{
    // Properties
    public int $id_annonce;
    public string $titre;
    public int $prix;
    public string $description;
    public int $id_user; /* peut etre pas une bonne idée de mettre l'id en public, idk */
    public int $id_cat;
    public string $photo;
  
    // Methods
    /*permet d'instancier une nouvelle annonce, peut etre mettre du SQL plus tard pour mettre dans la bdd ?*/
    function set_annonce($id_annonce, $titre, $prix, $description, $photo, $id_user, $id_cat) {
      $this->id_annonce = $id_annonce;
      $this->titre = $titre;
      $this->prix = $prix;
      $this->description = $description;
      $this->id_cat = $id_cat;
      $this->id_user = $id_user;
      $this->photo = $photo;
    }
    /*donne sous forme de liste tout les elements d'une annonce*/

  }

  /*renvoie un tableau des annonces*/
  function get_annonce($db) 
  {
    $annonce_db = $db->prepare('SELECT * FROM annonce');
    $annonce_db->execute();
    $annonces_recup = $annonce_db->fetchAll();

    $annonce_class = [];

    for($k=0;$k<count($annonces_recup);$k+=1)
    {
        $annonce_class[] = new annonce();
        $annonce_class[$k]->set_annonce($annonces_recup[$k]['id_annonce'], $annonces_recup[$k]['titre'],$annonces_recup[$k]['prix'],$annonces_recup[$k]['description'],$annonces_recup[$k]['photo'],$annonces_recup[$k]['id_user'],$annonces_recup[$k]['id_cat'],);
    }
    return $annonce_class;
  }

  function send_annonce($db)
  {
    $annonce_db = $db->prepare("insert into annonce values (NULL, '$titre', '$prix', '$description', '$photo', '$_SESSION[$id_user]', '$categorie')");
    $annonce_db->execute();
  }
  

  function supr_annonce($db, $id)
  {
    $annonce_db = $db->prepare("DELETE FROM annonce WHERE id_annonce = $id");
    $annonce_db->execute();
  }

  function modif_annonce($db, $id, $annonce)
  {
    $annonce_db = $db->prepare("UPDATE annonce SET titre = $annonce->titre, prix = $annonce->prix, description = $annonce->description, id_cat = $annnonce->id_cat");
    $annonce_db->execute();
  }



  /*
  $annonce1 = new annonce();
  $annonce1->set_annonce("first_titre","first","first","first","first_id",);

  var_dump($annonce1->get_annonce());
  echo "<br>";
  echo $annonce1->titre;
  */

  ?>
