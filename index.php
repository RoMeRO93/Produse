<?php

$server  = "localhost";
$username="root";
$password="";
$dbname="mydb";

$connection = new mysqli($server, $username, $password, $dbname);

IF ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
   $nume  = $_POST['nume'];
   $descriere  = $_POST['descriere'];
   $pret  = $_POST['pret'];

   
   if ($connection) 
   {
       $sqlQuery ="insert into produse(nume, descriere, pret) values ('$nume', '$descriere', $pret)" ;
       

       if (mysqli_query($connection, $sqlQuery))
       {
            echo "Produsul a fost salvat cu succes";
       }
       else
       {
         echo "Nu s-a putut salva";
       }
       
   }
   
}




?>

<head>
  
<div class="b-example-divider,"></div>
<link href="exemplu\header\header.css" rel="stylesheet">
<div class="container">

  <header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
      <Style>
        .nav-link
        {
      
          margin-right:10px;
        } 
      </Style>
     
     
      <li class="nav-item"><a href="index.html" class="nav-link active" aria-current="page">Prima pagina</a></li>
      <li class="nav-item"><a href="index.php" class="nav-link active"  aria-current="page">Produse</a></li>
      <li class="nav-item"><a href="login.html" class="nav-link active" aria-current="page">Logare</a></li>
      <li class="nav-item"><a href="pagina2.html" class="nav-link active" aria-current="page">Ajutor</a></li>
    </ul>
  </header>
</div>
</head>

<link rel="stylesheet"  href="bootstrap\css\bootstrap.css">

<form action="index.php" method="POST" >
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      form {
        background-color: #ffffff;
        width: 400px;
        margin: 16px auto;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 0 10px #cccccc;
      }
      label, input {
        display: block;
        width: 100%;
        margin-bottom: 16px;
        border-radius: 8px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 24px;
        border-radius: 8px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      </style>
Nume produs <input name="nume" type="text"/>
<br/>
Descriere produs: <input name="descriere" type="text" value=""/>
<br/>
Pret produs: <input name="pret" type="text" value=""/>
<br/>
<input  type="submit"  value="Insereaza" />


</form>
<br/>
<br/>

<table  style="border: 1px dashed black; width: 100%;">

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

</table>

