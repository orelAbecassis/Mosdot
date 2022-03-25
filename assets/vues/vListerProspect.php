<html><head><link rel="stylesheet" href="assets/css/style.css"></head></html>




<div class="table-wrapper" >

    <table class="fl-table" class="table-wrapper">
       
    <!-- <li class="scroll-to-section"><a href="supprimer.php">Supprimer</a></li> -->

      <?php
if (count($invite)>0)
{
    // echo(count($invite))
?>

<br><br><br>

<div id="rechercher1">
  <h2>Liste des Particpants</h2> 
 
  </div>
<br>

<thead>
        <tr>
          <th>Type</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Modifier</th>
          <th>ajouter Don</th>
          
       
        </tr>
        </thead>
<?php

}

?>
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i<count($invite))
    { 
        
 ?>     
        <tr>
            x²
            <td><?php echo $invite[$i]["Statut"] ?></td>
            <td><?php echo $invite[$i]["nom"] ?></td>
            <td><?php echo $invite[$i]["prenom"]?></td>
            <td><?php echo $invite[$i]["Email"]?></td>
            <td><a href='../php/modifier.php?ID=" <?php echo $invite[$i]["Id_part"] ?>"'>Modifier</a></td>
            <td><a href='../php/ajouter_Dons.php?ID="<?php echo $invite[$i]["Id_part"] ?>"'>Ajouter</td>
            
       
<?php
        $i = $i + 1;
     }
     
?>       
       </tbody>       
     </table>    
  </div>

  

  



 
