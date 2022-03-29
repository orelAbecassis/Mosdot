<?php

include("../tools/fonction.php"); 
   
    if($_GET['ID']=="")
    {
      header("Location:listeProspect.php");
    }
    else
    {
      $unID=$_GET["ID"];
      $invite=listerUser($unID);
      if(count($invite)<=0)
       {
        header("Location:listeProspect.php");
      }
      
      if(count($_POST)>=6)
      {
        $etape = 3;
        $unIDD=$_GET["ID"];
        $unStatut=$_POST["Statut"];
        $unNom=$_POST["nom"];
        $unPrenom=$_POST["prenom"];
        $unNomHebraique=$_POST["prenomHebraique"];
        $unNomHP=$_POST['nom_HP'];
        $unEmail=$_POST["email"];
        $uneDate=$_POST["date"];
        $unSexe=$_POST["sexe"];
        $uneAdresse=$_POST["adresse"];
        $uneAdresse1=$_POST["Adresse1"];
        $uneVille=$_POST["ville"];
        $unCp=$_POST["cp"];
        $unMobile=$_POST["mobile"];
        $uneSociete=$_POST["societe"];
        $unPay=$_POST["Pays"];
        $unCom=$_POST["com"];
        modifier($unIDD,$unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPay,$unMobile,$uneSociete,$unCom);
        header("Location:listeProspect.php");
      }
      }

include("sous-menu.php");
include("../vues/vModifierProspect.php");
?>
  
