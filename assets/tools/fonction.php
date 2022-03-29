<?php

include("baseDeDonnee.php");


// la liste de tout les dons avec les noms des donateurs 
function lister_donsEntier()
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
      
      $info = array();
      while($ligne)
      {
          
          $info[$i]['idDon']=$ligne->idDon;
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
   
    return $info;
}


// La liste de tout les invites
function listerInvite()
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
    return $info;
}


// Lister toutes informations d'un invite pour pouvoir le modifier par la suite
function listerUser($id)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part =$id;";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      
         
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
    
    return $info;
}



//recuperer les infos d'un don pour le modifier ensuite
function listerIDDONS($unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from don where idDon =".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Libelle']=$ligne->Libelle;  
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['date']=$ligne->Montant;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
   
}




//rechercher les invites en fonctions des infos de ces derniers (jusqua 3 recherches possibles)
function searchglobal($nom,$prenom,$mail)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="select * from participant  where Nom LIKE '".$nom."%' OR  Prenom LIKE '".$prenom."%' OR Email LIKE '".$mail."%';"; 
    
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      // echo($requete);
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $info=array();
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
        // $info[$i]['Id_part']=$ligne->Id_part;
        $info[$i]['Statut']=$ligne->Statut;  
        $info[$i]['Id_part']=$ligne->Id_part;  
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


//resultat d'une recherche par la date
function searchglobalDon($date)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , participant.email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where   don.dateReglement ='".$date."'"; 
    //echo($requete);
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $info=array();
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
        //  // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Email']=$ligne->email;
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





// Modifier un invité via l'ID
function modifier($unID,$unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPay,$unMobile,$uneSociete,$unCom)

{

    // Ouvrir une connexion au serveur mysql en s'identifiant
  $connect = connexionBdd();

      
      
          
        $requete="UPDATE participant SET Statut='".$unStatut."',Nom='".$unNom."',Prenom='".$unPrenom."',Nom_hebraique='".$unNomHebraique."',Nom_hebraique_Parents='".$unNomHP."', Email='".$unEmail."',Date_naissance='".$uneDate."',Sexe='".$unSexe."',Adresse='".$uneAdresse."',Adresse1='".$uneAdresse1."',codePostal=".$unCp.",Ville='".$uneVille."',Pays='".$unPay."',Mobile=".$unMobile.",Societe='".$uneSociete."',commentaire='".$unCom."' WHERE Id_part=".$unID.";";
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
    




// modifier un don via l'ID
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
        

//ajouter un don avec l'id de l'invité
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

//ajouter un invité en inserant les données d'un formulaire
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

      
      
    }
 

        



function supprimer2($ref)
{
    $connexion = connexionBdd();
    
    
          
    $requete="SET FOREIGN_KEY_CHECKS = 0; delete from participant";
    $requete=$requete." where Id_part=$ref;";
    
    // Lancer la requ�te supprimer
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          echo $requete;
        // Si la requ�te a �chou�
     

}

//supprimer un don
function supprimerdon($ref)
{
    $connexion = connexionBdd();
    
    $requete="SET FOREIGN_KEY_CHECKS = 0; delete from don";
    $requete=$requete." where idDon=$ref;";
    
    // Lancer la requ�te supprimer
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          echo $requete;
        // Si la requ�te a �chou�
     

}

//recuperer le nom et prenom d'un invité pour l'afficher pour  modifier un invité via l'id de l'invité
function getnom($unID)
{
  $connect=connexionBdd();  
  
  if (TRUE) 
  {
    $requete="SELECT Nom,Prenom from participant where Id_part =$unID;";
    $jeuResultat=$connect->query($requete);
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      $info = array();
      if($ligne)
      {
        $info[0]['Nom']=$ligne->Nom;
        $info[0]['Prenom']=$ligne->Prenom;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
      }
  }
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  return $info;
}


//recuperer le nom et prenom d'un invité pour l'afficher pour ajouter ou modifier un don via l'id du don
function getnomdon($unID)
{
    $connect=connexionBdd();  
    $requete="SELECT p.Nom,p.Prenom from participant p INNER JOIN don d on p.Id_part = d.Id_part where d.idDon=$unID;";
    $jeuResultat=$connect->query($requete);
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      $info = array();
      if($ligne)
      {
        $info[0]['Nom']=$ligne->Nom;
        $info[0]['Prenom']=$ligne->Prenom;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
      }
  
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $info;
}

?>