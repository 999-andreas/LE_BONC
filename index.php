<?php
echo "bjour tout le monde";

// sera dans "module", les methode seront utilisé par "controller" et envoyé vers "vue"

class annonce {
    // Properties
    private $titre;
    private $prix;
    private $description;
    private $categories;
    private $id;
  
    // Methods
    function set_annonce($titre, $prix, $description, $categories, $id) {
      $this->titre = $titre;
      $this->prix = $prix;
      $this->description = $description;
      $this->categories = $categories;
      $this->id = $id;

    }
    function get_annonce() {
      return $this->titre;
      return $this->prix;
      return $this->description;
      return $this->categories;
      return $this->id;
    }

    '''
    A FAIRE :
        fonction pour :
            supprimer une annonce
            modifier une annonce
            avoir une liste de toute les annonces
            mettre une annonce en favoris ?

    REMARQUE :        
    module sert seulement a comuniquer avec la bdd
    fitre par critères dans le controller 
    
    je sais pas comment on relie les different pages a des fonctions dans le controller...


    '''
  }
