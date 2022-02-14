
<?php



include("entete.php") ;
    include("../tools/fonction.php"); 
    
// DEBUT du contrôleur lister.php
  if (count($_POST)==0)
  {
    // echo'marche pas';
    $etape=1;
  }
  else
  {
    $etape=2;
    $info=array();
    if (isset($_POST['info']))
    {
    $info = $_POST['info'];
    echo'marche pas';
    }  
    $nom=$_POST["nom"]; 
    $invite= lister_search($info,$nom);
    // echo'marche'; 
    // var_dump($invite);
     
  }
  

  // DEBUT du contrôleur lister.php
  if (count($_POST)==0)
  {
    $etape=1;
  }
  else
  {
    $etape=2;
    $info=array();
    if (isset($_POST['info']))
    {
    $info = $_POST['info'];
    }  
    $prenom=$_POST["prenom"]; 
    $invite= lister_searchPrenom($info,$prenom);
    // var_dump($invite);
       
     
  }



  // DEBUT du contrôleur lister.php
  if (count($_POST)==0)
  {
    $etape=1;
  }
  else
  {
    $etape=2;
    $info=array();
    if (isset($_POST['info']))
    {
    $info = $_POST['info'];
    }  
    $mail=$_POST["mail"]; 
    $invite= lister_searchMail($info,$mail);
    // var_dump($invite);
       
     
  }
  
  // Construction de la page Lister
  // pour l'affichage (appel des vues)
    
  if ($etape==1)
  {
    include("../vues/vRechercher.php");
  }
  if ($etape==2)
  {
      include("../vues/vListerAdherent.php");
      include("../vues/vListerprostect.php");
  }
  include("footer.php");
  
  
   
  ?>
    
