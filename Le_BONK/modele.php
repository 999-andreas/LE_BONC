<?php

require "co_PDO.php";


class annonce 
{
    // Properties
    public int $id_annonce;
    public string $titre;
    public int $prix;
    public string $description;
    public int $id_user; 
    public int $id_cat;
    public string $photo;
  
    // Methods
    /*permet d'instancier une nouvelle annonce*/
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

  /*recup toutes les annonces de la db et renvoie sous forme de tableau de class annonce*/
  function get_annonce($db, $id_cat, $prix_min, $prix_max) 
  {
    if($id_cat==0)
    {
      $annonce_db = $db->prepare("SELECT * FROM annonce WHERE prix<='$prix_max' AND prix>='$prix_min'");
      $annonce_db->execute();
    }
    else
    {
      $annonce_db = $db->prepare("SELECT * FROM annonce WHERE id_cat = $id_cat AND prix<='$prix_max' AND prix>='$prix_min'");
      $annonce_db->execute();
    }

    $annonces_recup = $annonce_db->fetchAll();

    $annonce_class = [];

    for($k=0;$k<count($annonces_recup);$k+=1)
    {
        $annonce_class[] = new annonce();
        $annonce_class[$k]->set_annonce($annonces_recup[$k]['id_annonce'], $annonces_recup[$k]['titre'],$annonces_recup[$k]['prix'],$annonces_recup[$k]['description'],$annonces_recup[$k]['photo'],$annonces_recup[$k]['id_user'],$annonces_recup[$k]['id_cat'],);
    }
    return $annonce_class;
  }

  /*recup l'annonce qui correspond a l'id*/
  function get_1annonce($id, $db)
  {
    $annonce_db = $db->prepare("SELECT * FROM annonce WHERE id_annonce = $id");
    $annonce_db->execute();
    $annonces_recup = $annonce_db->fetchAll();

    $annonce_class = new annonce();
    $annonce_class->set_annonce($annonces_recup[0]['id_annonce'], $annonces_recup[0]['titre'],$annonces_recup[0]['prix'],$annonces_recup[0]['description'],$annonces_recup[0]['photo'],$annonces_recup[0]['id_user'],$annonces_recup[0]['id_cat'],);
    return $annonce_class;
  }

  /*envoie d'un nouvelle enregristrement dans la table annonce*//* ne pas mettre de ' dans les champs*/
  function send_annonce2($titre,$prix,$description,$photo,$id_user,$id_cat, $db)
  {
    $annonce_db = $db->prepare("insert into annonce values (NULL, '$titre', '$prix', '$description', '$photo', '$id_user', '$id_cat')");
    $annonce_db->execute(); 
  }
  
  /*supprimer l'enregistrement correspodant a l'id renseigne*/
  function supr_annonce($db, $id)
  {
    $annonce_db = $db->prepare("DELETE FROM annonce WHERE id_annonce = $id");
    $annonce_db->execute();
    echo "HELLO";

  }


  /*on modifie le tableau de class annonce puis on update la db*/
  function modif_annonce($id_annonce, $titre,$prix,$description,$photo,$id_cat, $db)
  {
    $annonce_db = $db->prepare("UPDATE annonce SET titre = '$titre', prix = '$prix', description = '$description', photo = '$photo', id_cat = '$id_cat' WHERE id_annonce = '$id_annonce' ");
    $annonce_db->execute(); 
    echo "HELLO";
  }

  /*on test si le fichier est conforme et on l'enregistre*/
  function traitement_fichier()
  {
    /*on defini ou le fichier vas etre stock??*/
    $target_dir = "photos/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    /*on test si le fichier existe d??j??*/
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    $extensions = array('jpg', 'png', 'jpeg');
    
    /*on test si le fichier est set et si il n'y a pas d'erreur*/
    if (isset($_FILES['photo']) && !$_FILES['photo']['error']) 
    {
      $fileInfo = pathinfo($_FILES['photo']['name']);
    
      /*on test la taille de la photo*/
      if ($_FILES['photo']['size'] <= 2000000) 
      {
        /* on test si le fichier est du bon type*/
        if (in_array($fileInfo['extension'], $extensions)) 
        {
          #echo "le fichier est good";
          /* renvoyer vers l'acceuil ou vers la page de l'annonce*/
        } 
        else 
        {
          #echo 'Ce type de fichier est interdit';
          return 1;
        }
      } 
      else 
      {
        #echo 'Le fichier d??passe la taille autoris??e';
        return 2;
      }
    } 
    else 
    {
      #echo 'Une erreur est survenue lors de l\'envoi du fichier';
      return 3;
    }

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
      #echo "Le fichier ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " a ??t?? recup";
    } else {
      echo "c'est cass??";
    }
  }

  /*recup de la table des categorie*/
  function get_categorie($db)
  {
    $categorie_db = $db->prepare("SELECT * FROM categorie");
    $categorie_db->execute();
    $categorie_recup = $categorie_db->fetchAll();

    return $categorie_recup;
  }

  /*
  $annonce1 = new annonce();
  $annonce1->set_annonce("first_titre","first","first","first","first_id",);

  var_dump($annonce1->get_annonce());
  echo "<br>";
  echo $annonce1->titre;
  */

  ?>
