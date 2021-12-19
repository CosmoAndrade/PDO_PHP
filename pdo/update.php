<?php

$dbname = "db_pdo";
$host = "localhost";
$username = "root";
$password = "";

// $conn = new PDO("mysql:dbname=db_pdo;host:localhost","root","");

$conn = new PDO("mysql:dbname=".$dbname.";host=".$host,$username,$password);
$id = 1;
$login = "adriana.galdino@email";
$password ="99";

$stmt =  $conn->prepare(" UPDATE users SET login = :login ,password = :password  WHERE id = :id ");

$stmt->bindParam(':id',$id);
$stmt->bindParam(':login',$login);
$stmt->bindParam(':password',$password);

$stmt->execute();

echo "<br>";
echo " Id $id  (Usuario $login)  atualizado com successo!";

?>


<style>
    body{
        font-family: 'Courier New', Courier, monospace;
        font-size: 25px;
    }
</style>





