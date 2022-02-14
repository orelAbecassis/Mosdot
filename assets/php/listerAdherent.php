<?php



// include("entete.php");
include('sous-menu.php');

include("../tools/fonction.php");

  $info=array();
  if (isset($_GET['info']))
  {
  $info = $_GET['info'];
  }
   
  $invite = listerDonateur($info);

  
 
//   include($repVues."menu.php") ;

  include("../vues/vListerAdherent.php");
  // include("footer.php") ;
  include("footer.php");
  ?>                             
    
