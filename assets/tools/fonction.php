<?php

include("baseDeDonnee.php");


// la liste de tout les dons avec les noms des donnateurs 
function lister_donsEntier($info)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="SELECT don.idDon, participant.Nom, participant.Prenom , participant.Email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part; ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle; 
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}





//Afficher tout les dons une personne
function lister_dons($unID)
{
  $connect=connexionBdd();  
  
  if (TRUE) 
  {
      
    
      $requete="SELECT don.idDon, participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.Id_part=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      // var_dump($ligne);
      $info = array();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle;
          $info[$i]['dateReglement']=$ligne->dateReglement;
          // $info[$i]['nom']=$ligne->nom;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}

// La liste de tout les invites
function listerInvite($info)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant ; ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          // $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}




// // La liste de tout les donateurs
// function listerDonateur($info)
// {
//   $connect=connexionBdd();  
//   if (TRUE) 
//   {
      
    
//       $requete="SELECT don.idDon,participant.Nom,participant.Date_naissance,participant.Sexe,participant.Adresse,participant.Adresse1,participant.codePostal,participant.Ville,participant.Societe,participant.commentaire,participant.Pays,participant.Mobile,participant.Id_part, participant.Prenom , participant.Statut, don.Libelle, participant.Nom_Hebraique, participant.Nom_hebraique_Parents, participant.Email from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.statut = 'donateur'and don.Libelle!='entree'; ";
      
      
//       $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

//       $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
//       $i = 0;
//       $ligne = $jeuResultat->fetch();
//       while($ligne)
//       {
//           // echo($requete);
//           // $info[$i]['Id_part']=$ligne->Id_part;
//           $info[$i]['Id_part']=$ligne->Id_part;
//           $info[$i]['Statut']=$ligne->Statut;
//           $info[$i]['nom']=$ligne->Nom;
//           $info[$i]['prenom']=$ligne->Prenom;
//           $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
//           $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
//           $info[$i]['Email']=$ligne->Email;
//           $info[$i]['Date_naissance']=$ligne->Date_naissance;
//           $info[$i]['Sexe']=$ligne->Sexe;
//           $info[$i]['Adresse']=$ligne->Adresse;
//           $info[$i]['Adresse1']=$ligne->Adresse1;
//           $info[$i]['codePostal']=$ligne->codePostal;
//           $info[$i]['Ville']=$ligne->Ville;
//           $info[$i]['Pays']=$ligne->Pays;
//           $info[$i]['Mobile']=$ligne->Mobile;
//           $info[$i]['Societe']=$ligne->Societe;
//           $info[$i]['commentaire']=$ligne->commentaire;
          
//           $ligne=$jeuResultat->fetch();
//           $i = $i + 1;
          
//       }
      
//     }
  
//     $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
//     // deconnecterServeurBD($idConnexion);
//     return $info;
// } 


function listerUser($id)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part =" . $id;
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
          // echo($requete);
          // $info[$i]['Id_part']=$ligne->Id_part;
          $info['Id_part']=$ligne->Id_part;
          $info['Statut']=$ligne->Statut;
          $info['nom']=$ligne->Nom;
          $info['prenom']=$ligne->Prenom;
          $info['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info['Email']=$ligne->Email;
          $info['Date_naissance']=$ligne->Date_naissance;
          $info['Sexe']=$ligne->Sexe;
          $info['Adresse']=$ligne->Adresse;
          $info['Adresse1']=$ligne->Adresse1;
          $info['codePostal']=$ligne->codePostal;
          $info['Ville']=$ligne->Ville;
          $info['Pays']=$ligne->Pays;
          $info['Mobile']=$ligne->Mobile;
          $info['Societe']=$ligne->Societe;
          $info['commentaire']=$ligne->commentaire;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}

//
function listerID($info,$unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;  
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
   
}



//afficher un don 
function listerIdDon($info,$unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['IdDon']=$ligne->IdDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle;
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   
    return $info;
   
}




// //Une rechercher via le nom

// function lister_search($info,$unNom)
// {
//   $connect=connexionBdd();  
//   if (TRUE) 
//   {
      
    
//     $requete="select * from participant";
//     $requete=$requete." where Nom = '".$unNom."';"; 
//     // echo($requete);
      
      
//       $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

//       $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
//       $i = 0;
//       $ligne = $jeuResultat->fetch();
//       while($ligne)
//       {
//         // $info[$i]['Id_part']=$ligne->Id_part;
//         $info[$i]['Statut']=$ligne->Statut;  
//         $info[$i]['nom']=$ligne->Nom;
//         $info[$i]['prenom']=$ligne->Prenom;
//         $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
//         $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
//         $info[$i]['Email']=$ligne->Email;
//         $info[$i]['Date_naissance']=$ligne->Date_naissance;
//         $info[$i]['Sexe']=$ligne->Sexe;
//         $info[$i]['Adresse']=$ligne->Adresse;
//         $info[$i]['Adresse1']=$ligne->Adresse1;
//         $info[$i]['codePostal']=$ligne->codePostal;
//         $info[$i]['Ville']=$ligne->Ville;
//         $info[$i]['Pays']=$ligne->Pays;
//         $info[$i]['Mobile']=$ligne->Mobile;
//         $info[$i]['Societe']=$ligne->Societe;
//         $info[$i]['Statut']=$ligne->Statut;
//         $info[$i]['commentaire']=$ligne->commentaire;
//           $ligne=$jeuResultat->fetch();
//           $i = $i + 1;
//           // echo"l'invite a bien ete ajoute";
//       }
//   }
//     $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
//     // deconnecterServeurBD($idConnexion);
//     return $info;
// }

// //Une rechercher via le prenom

// function lister_searchPrenom($info,$unPrenom)
// {
//   $connect=connexionBdd();  
//   if (TRUE) 
//   {
      
    
//     $requete="select * from participant";
//     $requete=$requete." where prenom = '".$unPrenom."';"; 
//     // echo($requete);
      
      
//       $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

//       $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
//       $i = 0;
//       $ligne = $jeuResultat->fetch();
//       while($ligne)
//       {
//         // $info[$i]['Id_part']=$ligne->Id_part;
//         $info[$i]['Statut']=$ligne->Statut;  
//         $info[$i]['nom']=$ligne->Nom;
//         $info[$i]['prenom']=$ligne->Prenom;
//         $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
//         $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
//         $info[$i]['Email']=$ligne->Email;
//         $info[$i]['Date_naissance']=$ligne->Date_naissance;
//         $info[$i]['Sexe']=$ligne->Sexe;
//         $info[$i]['Adresse']=$ligne->Adresse;
//         $info[$i]['Adresse1']=$ligne->Adresse1;
//         $info[$i]['codePostal']=$ligne->codePostal;
//         $info[$i]['Ville']=$ligne->Ville;
//         $info[$i]['Pays']=$ligne->Pays;
//         $info[$i]['Mobile']=$ligne->Mobile;
//         $info[$i]['Societe']=$ligne->Societe;
//         $info[$i]['Statut']=$ligne->Statut;
//         $info[$i]['commentaire']=$ligne->commentaire;
//           $ligne=$jeuResultat->fetch();
//           $i = $i + 1;
//           // echo"l'invite a bien ete ajoute";
//       }
//   }
//     $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
//     // deconnecterServeurBD($idConnexion);
//     return $info;
// }


// //Une rechercher via la mail

// function lister_searchMail($info,$unMail)
// {
//   $connect=connexionBdd();  
//   if (TRUE) 
//   {
      
    
//     $requete="SELECT don.idDon, participant.Nom, participant.Prenom ,participant.email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.email=".$unMail.";";
      
      
//     $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

//     $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
//     $i = 0;
//     $ligne = $jeuResultat->fetch();
//     while($ligne)
//     {
//         // echo($requete);
  
//         $info[$i]['Nom']=$ligne->Nom;
//         $info[$i]['Prenom']=$ligne->Prenom;
//         $info[$i]['Email']=$ligne->Email;
//         $info[$i]['Libelle']=$ligne->Libelle;
//         $info[$i]['typeDon']=$ligne->typeDon;
//         $info[$i]['Montant']=$ligne->Montant;
//         $info[$i]['typeReglement']=$ligne->typeReglement;
//         $info[$i]['estRegle']=$ligne->estRegle; 
//         $info[$i]['dateReglement']=$ligne->dateReglement;
//         $info[$i]['commentaire']=$ligne->commentaire;
//         $ligne=$jeuResultat->fetch();
//         $i = $i + 1;
//     }
//   }
//   $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
//   // deconnecterServeurBD($idConnexion);
//   return $info;
// }
// function searchglob($info,$unMail,$unPrenom,$unNom)
// {
//   $connect=connexionBdd();  
//   if (TRUE) 
//   {
    
    
//     $requete="SELECT don.idDon,participant.Id_part,participant.Nom, participant.Prenom ,participant.email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.email ='".$unMail."' OR participant.Nom = '".$unNom."' OR participant.Prenom = '".$unPrenom."' ;";
    

//     $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
//     echo $requete;
  
//     $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
//     $i = 0;
//     $ligne = $jeuResultat->fetch();
//     while($ligne)
//     {
//       $info[$i]['Id_part']=$ligne->Id_part;
//       $info[$i]['Statut']=$ligne->Statut;
//       $info[$i]['nom']=$ligne->Nom;
//       $info[$i]['prenom']=$ligne->Prenom;
//       $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
//       $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
//       $info[$i]['Email']=$ligne->Email;
//       $info[$i]['Date_naissance']=$ligne->Date_naissance;
//       $info[$i]['Sexe']=$ligne->Sexe;
//       $info[$i]['Adresse']=$ligne->Adresse;
//       $info[$i]['Adresse1']=$ligne->Adresse1;
//       $info[$i]['codePostal']=$ligne->codePostal;
//       $info[$i]['Ville']=$ligne->Ville;
//       $info[$i]['Pays']=$ligne->Pays;
//       $info[$i]['Mobile']=$ligne->Mobile;
//       $info[$i]['Societe']=$ligne->Societe;
//       $info[$i]['commentaire']=$ligne->commentaire;
      
//         $ligne=$jeuResultat->fetch();
//         $i = $i + 1;
//     }
//   }
//   $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
//   // deconnecterServeurBD($idConnexion);
//   return $info;
// }


function searchglobal($info,$unNom,$unPrenom,$unMail)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="select * from participant";
    $requete=$requete." where Nom = '".$unNom."' OR  Prenom = '".$unPrenom."' OR Email = '".$unMail."';"; 
    // echo($requete);
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
        // $info[$i]['Id_part']=$ligne->Id_part;
        $info[$i]['Statut']=$ligne->Statut;  
        $info[$i]['nom']=$ligne->Nom;
        $info[$i]['prenom']=$ligne->Prenom;
        $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
        $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
        $info[$i]['Email']=$ligne->Email;
        $info[$i]['Date_naissance']=$ligne->Date_naissance;
        $info[$i]['Sexe']=$ligne->Sexe;
        $info[$i]['Adresse']=$ligne->Adresse;
        $info[$i]['Adresse1']=$ligne->Adresse1;
        $info[$i]['codePostal']=$ligne->codePostal;
        $info[$i]['Ville']=$ligne->Ville;
        $info[$i]['Pays']=$ligne->Pays;
        $info[$i]['Mobile']=$ligne->Mobile;
        $info[$i]['Societe']=$ligne->Societe;
        $info[$i]['Statut']=$ligne->Statut;
        $info[$i]['commentaire']=$ligne->commentaire;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
         
      }
  }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}



function searchglobalDon($info,$unNom,$unPrenom,$unMail)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , participant.email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part";
    $requete=$requete." where participant.Nom '".$unNom."' OR  participant.Prenom= '".$unPrenom."' OR participant.email = '".$unMail."';"; 
    echo($requete);
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
        //  // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Email']=$ligne->Mail;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle; 
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
         
      }
  }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}






//Une rechercher de don via le nom

function lister_searchDon($info,$unNom)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.Nom=".$unNom.";";
      
      
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        // echo($requete);
  
        $info[$i]['Nom']=$ligne->Nom;
        $info[$i]['Prenom']=$ligne->Prenom;
        $info[$i]['Libelle']=$ligne->Libelle;
        $info[$i]['typeDon']=$ligne->typeDon;
        $info[$i]['Montant']=$ligne->Montant;
        $info[$i]['typeReglement']=$ligne->typeReglement;
        $info[$i]['estRegle']=$ligne->estRegle; 
        $info[$i]['dateReglement']=$ligne->dateReglement;
        $info[$i]['commentaire']=$ligne->commentaire;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
  }
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  // deconnecterServeurBD($idConnexion);
  return $info;
}




//Une rechercher de don via le prenom

function lister_searchDonPrenom($info,$unPrenom)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.prenom=".$unPrenom.";";
      
      
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        // echo($requete);
  
        $info[$i]['Nom']=$ligne->Nom;
        $info[$i]['Prenom']=$ligne->Prenom;
        $info[$i]['Email']=$ligne->Email;
        $info[$i]['Libelle']=$ligne->Libelle;
        $info[$i]['typeDon']=$ligne->typeDon;
        $info[$i]['Montant']=$ligne->Montant;
        $info[$i]['typeReglement']=$ligne->typeReglement;
        $info[$i]['estRegle']=$ligne->estRegle; 
        $info[$i]['dateReglement']=$ligne->dateReglement;
        $info[$i]['commentaire']=$ligne->commentaire;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
  }
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  // deconnecterServeurBD($idConnexion);
  return $info;
}


//Une rechercher de don l'email

function lister_searchDonMail($info,$unNom)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.Email=".$unMail.";";
      
      
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        // echo($requete);
  
        $info[$i]['Nom']=$ligne->Nom;
        $info[$i]['Prenom']=$ligne->Prenom;
        $info[$i]['Libelle']=$ligne->Libelle;
        $info[$i]['typeDon']=$ligne->typeDon;
        $info[$i]['Montant']=$ligne->Montant;
        $info[$i]['typeReglement']=$ligne->typeReglement;
        $info[$i]['estRegle']=$ligne->estRegle; 
        $info[$i]['dateReglement']=$ligne->dateReglement;
        $info[$i]['commentaire']=$ligne->commentaire;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
  }
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  // deconnecterServeurBD($idConnexion);
  return $info;
}
















function modifier($unID,$unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPay,$unMobile,$uneSociete,$unCom)

{

    // Ouvrir une connexion au serveur mysql en s'identifiant
  $connect = connexionBdd();

      
      
          
        $requete="UPDATE participant SET ";
        $requete=$requete."Statut='".$unStatut."',Nom='".$unNom."',Prenom='".$unPrenom."',Nom_hebraique='".$unNomHebraique."',Nom_hebraique_Parents='".$unNomHP."', Email='".$unEmail."',Date_naissance='".$uneDate."',Sexe='".$unSexe."',Adresse='".$uneAdresse."',Adresse1='".$uneAdresse1."',codePostal=".$unCp.",Ville='".$uneVille."',Pays='".$unPay."',Mobile=".$unMobile.",Societe='".$uneSociete."',commentaire='".$unCom."' WHERE Id_part=".$unID.";";
        // echo $requete;
        
          // Lancer la requ�te d'ajout 
          $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        
          // Si la requ�te a r�ussi
          if ($ok)
          {
            $message = "l'invite a bien ete modifie";
          //   ajouterErreur($tabErr, $message);
          }
          else
          {
            $message = "L'invite n'a pas ete modifie !!!";
          //   ajouterErreur($tabErr, $message);
          } 

      }
      // fermer la connexion
      // deconnecterServeurBD($idConnexion);
    





function modifierDon($unID,$unLibelle,$unType,$unMontant,$unRegle,$unEstPaye,$unDate,$unCom)

{

    // Ouvrir une connexion au serveur mysql en s'identifiant
  $connect = connexionBdd();

      
      
          
        $requete="UPDATE don SET ";
        $requete=$requete."Libelle='".$unLibelle."',typeDon='".$unType."',Montant='".$unMontant."',typeReglement='".$unRegle."',estRegle='".$unEstPaye."', dateReglement='".$unDate."',commentaire='".$unCom."' WHERE idDon=".$unID.";";
        // echo $requete;
        
          // Lancer la requ�te d'ajout 
          $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        
          // Si la requ�te a r�ussi
          if ($ok)
          {
            $message = "l'invite a bien ete modifie";
          //   ajouterErreur($tabErr, $message);
          }
          else
          {
            $message = "L'invite n'a pas ete modifie !!!";
          //   ajouterErreur($tabErr, $message);
          } 
          return $requete;

      }
        


function ajouter_dons($unIdpart,$unLibelle,$untypeDons, $unMontant,$unTypeReg,$estRegle,$dateReg,$comm)
{
  $connect = connexionBdd();
  $requete="SELECT p.nom, d.idDon, p.Id_part, d.libelle, d.typeDon,d.Montant, d.typeReglement, d.estRegle FROM participant p inner join don d on p.Id_part=d.Id_part where p.Id_part=".$unIdpart.";";
  
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le r�sultat soit r�cup�rable sous forme d'objet     
  

  $ligne = $jeuResultat->fetch();
 
       
  $requete="INSERT INTO don ";
  $requete=$requete."(Id_part,Libelle,typeDon, Montant,typeReglement,estRegle,dateReglement,commentaire) values ("
  .$unIdpart.",'"
  .$unLibelle."','"
  .$untypeDons."',"
  .$unMontant.",'"
  .$unTypeReg."','"
  .$estRegle."','"
  .$dateReg."','"
  .$comm."');";
  $ok=$connect->query($requete);
  if ($ok)
  {
    $message = "l'invite a bien ete ajoute";
  }
  else
  {
    $message = "L'invite n'a pas ete ajoute !!!";
  } 
  // }
  
  
  
  
 





}

 function ajouter($unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP, $unEmail, $uneDate, $unSexe,$uneAdresse, $uneAdresse1,$uneVille,$unPays, $unCp,  $unMobile, $uneSociete, $unCom)
// function ajouter($unNom,$unPrenom,$unNomHebraique, $uneDate, $unSexe,$uneAdresse, $uneAdresse1,$uneVille, $unCp, $unEmail, $unMobile, $uneSociete,$unStatut, $unCom, $unPaie, $unMontant)

{

    // Ouvrir une connexion au serveur mysql en s'identifiant
      $connect = connexionBdd();

    
      
      
        
          
        $requete="insert into participant "
        ."(Statut,Nom, Prenom,Nom_Hebraique,Nom_hebraique_Parents,Email,Date_naissance,Sexe,Adresse,Adresse1,codePostal,Ville,Pays,Mobile,Societe,commentaire) values ('"
        .$unStatut."','"
        .$unNom."','"
        .$unPrenom."','"
        .$unNomHebraique."','"
        .$unNomHP."','"
        .$unEmail."','"
        .$uneDate."','"
        .$unSexe."','"
        .$uneAdresse."','"
        .$uneAdresse1."',"
        .$unCp.",'"
        .$uneVille."','"
        .$unPays."',"
        .$unMobile.",'"
        .$uneSociete."','"
        .$unCom."');";
        // echo $requete;
        // echo $unPays;
        // echo$uneVille;
        // echo $unCp;

        // echo $requete;

        
        // echo "l'invite a bien ete ajoute";
        
          // Lancer la requ�te d'ajout 
          $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        
          // Si la requ�te a r�ussi
          if ($ok)
          {
            $message = "l'invite a bien ete ajoute";
          //   ajouterErreur($tabErr, $message);
          }
          else
          {
            $message = "L'invite n'a pas ete ajoute !!!";
          //   ajouterErreur($tabErr, $message);
          } 

      
      // fermer la connexion
      // deconnecterServeurBD($idConnexion);
    }
 
        
function rechercher($nom)
{
    $connexion = connexionBdd();
    $info = array();
      
    $requete="select * from participant";
      $requete=$requete." where Nom='".$nom."';";
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    // Initialisationd e la cat�gorie trouv�e � : "aucune"
    $cat = "nulle";
    $i=0;
    $invite=0;
    
    $ligne = $jeuResultat->fetch();
    
    // Si un utilisateur est trouv�, on initialise une variable cat avec la cat�gorie de cet utilisateur trouv�e dans la table utilisateur
    while($ligne)
      {
          // echo($requete);
          $info[$i]['Id_part']=$ligne['Id_part'];
          $info[$i]['nom']=$ligne['Nom'];
          $info[$i]['Nom_Hebraique_Parents']=$ligne['Nom_Hebraique_Parents'];
          $info[$i]['prenom']=$ligne['Prenom'];
          $info[$i]['Nom_Hebraique']=$ligne['Nom_Hebraique'];
          $info[$i]['Email']=$ligne['Email'];
          $info[$i]['Date_naissance']=$ligne['Date_naissance'];
          $info[$i]['sexe']=$ligne['sexe'];
          $info[$i]['Adresse']=$ligne['Adresse'];
          $info[$i]['adresse1']=$ligne['Adresse1'];
          $info[$i]['Ville']=$ligne['Ville'];
          $info[$i]['codePostal']=$ligne['codePostal'];
          $info[$i]['Email']=$ligne['Email'];
          $info[$i]['Mobile']=$ligne['Mobile'];
          $info[$i]['Societe']=$ligne['Societe'];
          $info[$i]['Statut']=$ligne['Statut'];
          $info[$i]['commentaire']=$ligne['commentaire'];
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          $invite=$invite+1;
      }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $cat;
}


 






function lister($info)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          // $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}




// function supprimer($ref)
// {
//       $connexion = connexionBdd();
//       $requete="select * from participant";
//       $requete=$requete." where email = '".$ref."';"; 
//       $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
//       $ligne = $jeuResultat->fetch();
      
//       if ($ligne)
//       {
//         $requete="DELETE FROM participant WHERE email ='".$ref."';"; 
//         echo "L'invite a été correctement supprimé";
//         // Lancer la requête d'ajout 
//         $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
     
//       }
// } 


function GETID($ref)
{
  $connexion = connexionBdd();
    
  $fleur = array();
  $requete="select Id_part from participant";
    $requete=$requete." where email='".$ref."';";
    echo $requete;
    $jeuResultat=$connexion->query($requete);
   $ligne = $jeuResultat->fetch();
   if($ligne)
   {
     $ID = $ligne['Id_part'];
     
   }
   return($ID);
}
function supprimer2($ref)
{
    $connexion = connexionBdd();
    
    $fleur = array();
    $requete="select * from participant";
      $requete=$requete." where email='".$ref."';";
      $jeuResultat=$connexion->query($requete);
     $ligne = $jeuResultat->fetch();
     if ($ligne)
     { 
          
    $requete="SET FOREIGN_KEY_CHECKS = 0; delete from participant";
    $requete=$requete." where email='".$ref."';";
    
    // Lancer la requ�te supprimer
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requ�te a �chou�
        if ($ok==FALSE)
        {
          $message = "Attention, la suppression de la fleur a �chou� !!!";
          echo $requete;
         
        }
        else
        {
          echo $requete;
        }
       }
       else
       {
        $message="Echec de la suppression : la r�f�rence n'existe pas";
        
       } 

}

?>