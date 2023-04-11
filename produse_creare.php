<?php
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