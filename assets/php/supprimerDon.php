<?php
include("../tools/fonction.php"); 
include("sous-menu-don.php");
$ID=$_GET['ID'];
$supp= supprimerdon($ID);
header('Location:listerRecapDon.php');
?>


  
