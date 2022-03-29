<?php
include("sous-menu.php") ;
include("../tools/fonction.php"); 
  if (count($_POST)==0)
  {
    include("../vues/vRechercherProspect.php");
  }
  else
  {
    $nom=$_POST["nom"];
    if($nom=='')
    {
        $nom='0000';
    }
    $prenom=$_POST['prenom'];
    if($prenom=='')
    {
        $prenom='0000';
    }
    $mail=$_POST['mail'];
    if($mail=='')
    {
        $mail='0000';
    }
    
      $invite= searchglobal($nom,$prenom,$mail);
      if(count($invite)!=0)
      {
        include("../vues/vListerProspect.php");
      }
    else
    {
      echo '<script type="text/javascript"> alert("Cet invité n\'existe pas !")</script>';
      echo '<script type="text/javascript">window.location.replace("rechercherProspect.php");</script>';
    }      
    }  
  
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  include("footer.php");