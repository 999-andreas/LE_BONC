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
    public $titre;
    public $prix;
    public $description;
    public $categories;
    private $id; /* peut etre pas une bonne idée de mettre l'id en public, idk */
  
    // Methods
    /*permet d'instancier une nouvelle annonce, peut etre mettre du SQL plus tard pour mettre dans la bdd ?*/
    function set_annonce($titre, $prix, $description, $categories, $id) {
      $this->titre = $titre;
      $this->prix = $prix;
      $this->description = $description;
      $this->categories = $categories;
      $this->id = $id;

    }
    /*donne sous forme de liste tout les elements d'une annonce*/

  }

class user 
{
    // Properties
    public $mial;
    public $annonces; /* on  mets l'id des annonces qui lui appartient ?*/
    public $nom;
    public $prenom;
    private $id; /* peut etre pas une bonne idée de mettre l'id en public, idk */
  
    // Methods
    /*permet d'instancier une nouveau user, peut etre mettre du SQL plus tard pour mettre dans la bdd ?*/
    function set_annonce($mial, $annonces, $nom, $prenom, $id) {
      $this->mial = $mial;
      $this->annonces = $annonces;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->id = $id;

    }
  }


  /*renvoie un tableau des annonces*/
  function get_annonce($db) 
  {
    $annonce_db = $db->prepare('SELECT * FROM annonces');
    $annonce_db->execute();
    $annonces_recup = $annonce_db->fetchAll();

    $annonce_class = [];

    for($k=0;$k<count($annonces_recup);$k+=1)
    {
        $annonce_class[] = new annonce();
        $annonce_class[$k]->set_annonce($annonces_recup[$k]['titre'],$annonces_recup[$k]['prix'],$annonces_recup[$k]['description'],$annonces_recup[$k]['categories'],$annonces_recup[$k]['id'],);
    }
    return $annonce_class; /*et hop c'est lets go*/
  }
  

  function supr_annonce($annonce)
  {
    /*a faire*/
  }

  function modif_annonce($annonce, $colonne, $valeur)
  {
    /*a faire*/
  }



  /*
  $annonce1 = new annonce();
  $annonce1->set_annonce("first_titre","first","first","first","first_id",);

  var_dump($annonce1->get_annonce());
  echo "<br>";
  echo $annonce1->titre;
  */

  ?>
