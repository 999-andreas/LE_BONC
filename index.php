<?php
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
    function get_annonce() {
      return array($this->titre, $this->prix, $this->description, $this->categories, $this->id);
    }

    

  }

  $annonce1 = new annonce();
  $annonce1->set_annonce("first_titre","first","first","first","first_id",);

  var_dump($annonce1->get_annonce());
  echo "<br>";
  echo $annonce1->titre;
 

  ?>
