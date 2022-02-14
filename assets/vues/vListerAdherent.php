<html><head><meta charset="utf-8" /><link rel="stylesheet" href="assets/css/style.css"></head></html>



<!-- <div class="table-wrapper">
    <table class="fl-table" > -->
<div class="table-wrapper" >

    <table class="fl-table" class="table-wrapper">
   



      <?php
if (count($invite)>0)
{
    // echo(count($invite))
?>

<br><br><br>

<div id="rechercher1">
  <h2>Liste des Adhérents</h2> 
 
  </div>
<br>

<thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>Type</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Nom hébraique</th>
          <th>Nom hébraique des parents</th>
          <th>Email</th>
          <th>Modifier</th>
          <th>Ajouter Don</th>
          
       
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
            
        

            <!-- <td>
              <?php echo $invite[$i]["Id_part"] ?>
            </td>  -->
            <td><?php echo $invite[$i]["Statut"] ?></td>
            <td><?php echo $invite[$i]["nom"] ?></td>
            <td><?php echo $invite[$i]["prenom"]?></td>
            <td><?php echo $invite[$i]["Nom_hebraique_Parents"]?></a></td>
            <td><?php echo $invite[$i]["Nom_Hebraique"]?></td>
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

  



 
