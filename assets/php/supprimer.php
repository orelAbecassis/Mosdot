<?php


// DEBUT du contr�leur ajouter.php
include("../tools/fonction.php"); 
include("sous-menu.php");

$id=$_GET['ID'];


$etape = 2;
$invite = supprimerInvite2($id);

header('Location:listeProspect.php');
// if (count($_POST)==0)
// {
//   $etape = 1;
// }
// else
// {
//   $etape = 2;
//   $ref=$_POST["ref"];
//   $id = GETID($ref);
//   // echo $id;
//   $supp= supprimer2($ref);
//   header('location: listeProspect.php');

// }

// $info=array();
// if (isset($_GET['info']))
// {
// $info = $_GET['info'];
// }  

// $invite = lister($info);





// D�but de l'affichage (les vues)

include("entete.php") ;  
include("../vues/vSupprimer.php");
include("../vues/vListerProspect.php");
// include("../vues/vListerAdherent.php");
include("../vues/vListerRecapDon.php");
include("footer.php");

?>


  
