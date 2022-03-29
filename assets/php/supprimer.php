<?php
// DEBUT du contr�leur ajouter.php
include("../tools/fonction.php"); 
include("sous-menu.php"); 
  $ID = $_GET['ID'];
  $supp= supprimer2($ID);
  header('Location:listeProspect.php');
?>