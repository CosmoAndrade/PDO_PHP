<?php


$dbname = "db_pdo";
$host = "localhost";
$username = "root";
$password = "";

// $conn = new PDO("mysql:dbname=db_pdo;host:localhost","root","");

$conn = new PDO("mysql:dbname=".$dbname.";host=".$host,$username,$password);
$id = 3;


$stmt =  $conn->prepare(" DELETE FROM users WHERE id = :id ");

$stmt->bindParam(':id',$id);


$stmt->execute();

echo "<br>";
echo " Id $id    deletado com successo!";

?>


<style>
    body{
        font-family: 'Courier New', Courier, monospace;
        font-size: 25px;
    }
</style>





