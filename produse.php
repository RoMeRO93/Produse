<?php  
 $sqlQuery ="select * from produse" ;
 $result = mysqli_query($connection, $sqlQuery)      ;
while ($produs = mysqli_fetch_assoc($result))
{

?>

<div class="row mb-3">
      <div class="col-md-4 themed-grid-col"> <?php echo $produs['idproduse']; ?></div>
      <div class="col-md-4 themed-grid-col">  <?php echo $produs['nume']; ?></div>
      <div class="col-md-4 themed-grid-col"><?php echo $produs['descriere']; ?></div>
      
    </div>

    

    <?php } ?>