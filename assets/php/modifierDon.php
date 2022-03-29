<?php
include("../tools/fonction.php");   
    if($_GET['ID']=="")
    {
      header('Location:listerRecapDon.php');
    }
    else
    {
      $unIdDon=$_GET["ID"];   
      $invites=listerIDDONS($unIdDon);
      $nom = getnomdon($unIdDon);         
      if(count($_POST)>=6)
      {
        $etape = 3;
        $unIdDon=$_GET["ID"];
        $unLibelle=$_POST["Libelle"];
        $unType=$_POST["Type_Dons"];
        $unMontant=$_POST["montant"];
        // $unPaiement=$_POST["paiement"];
        $unRegle=$_POST["typeReglement"];
        $unEstPaye=$_POST['estRegle'];
        $unDate=$_POST["date"];
        $unCom=$_POST["com"];  
        
        modifierDon($unIdDon,$unLibelle,$unType,$unMontant,$unRegle,$unEstPaye,$unDate,$unCom);
        header('Location:listerRecapDon.php');      
      }  
    }
include('../vues/vModifierDon.php');     
// D�but de l'affichage (les vues)
include("sous-menu-don.php");
?>