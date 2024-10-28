<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "teste";

$conn = new mysqli($servername, $username, $password, $dbname);



$sql= ("SELECT * FROM login WHERE email = '$email' and senha = '$senha' ");
$resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows ($resultado) >0 ) 
    {
        echo  'acesso liberado';
    }
    else {
         echo  'acesso negado';
        }
    
    
$conn->close();
?>
