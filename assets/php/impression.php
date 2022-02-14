<html><body onload="window.print()"></html>

<?php



include("sous-menu-don.php");
include("../tools/fonction.php");

  $info=array();
  if (isset($_GET['info']))
  {
  $info = $_GET['info'];
  }

  $don =  lister_donsEntier($info);

  // count(array($don));
  
  
  // var_dump($don);
 
//   include($repVues."menu.php") ;
  include("../vues/vListerRecapDon.php");
  // include("footer.php") ;
  include("footer.php");
  ?>                             
    
