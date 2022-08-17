<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn";


try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE prepare SET Name='Qasim' WHERE ID=4";
    $conn->exec($sql);
    echo "Recard Updated...!";
}
catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}





?>