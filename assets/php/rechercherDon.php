
<?php



include("entete.php") ;
    include("../tools/fonction.php"); 
    
// DEBUT du contrôleur lister.php cest bon???
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
    }  
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
    $don= searchglobalDon($info,$nom,$prenom,$mail);
   
    //  var_dump($invite);
  }
  

 
    
  if ($etape==1)
  {
    include("../vues/vRechercherDons.php");
    // echo'salut';
  }
  if ($etape==2)
  {
      include("../vues/vListerRecapDon.php");
      // include("../vues/vListerProspect.php");
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
  
  
   
  ?>
    
