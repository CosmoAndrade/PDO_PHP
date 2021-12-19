<?php

$dbname = "db_pdo";
$host = "localhost";
$username = "root";
$password = "";

// $conn = new PDO("mysql:dbname=db_pdo;host:localhost","root","");

$conn = new PDO("mysql:dbname=".$dbname.";host=".$host,$username,$password);

$login = "Adriana@email";
$password ="2384";

$stmt =  $conn->prepare(" INSERT INTO users (login,password) VALUES (:login,:password) ");


$stmt->bindParam(':login',$login);
$stmt->bindParam(':password',$password);

$stmt->execute();

echo "<br>";
echo "Usuario $login inserido com successo!";

?>


<style>
    body{
        font-family: 'Courier New', Courier, monospace;
        font-size: 25px;
    }
</style>


