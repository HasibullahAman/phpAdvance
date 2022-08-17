<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn";


try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM prepare where ID=5";
    $conn->exec($sql);
    echo "Recard Deleted...!";
}
catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}





?>