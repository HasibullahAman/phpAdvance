<?php
header("CONTENT-TYPE:APPLICATION/JESON;CHARSET=UTF-8");
$obj = json_decode($_GET["x"],false);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'learn';

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
$stmt = $conn->prepare("SELECT firstName FROM $obj->table LIMIT ?");
$stmt ->bind_param("s",$obj->limit);
$stmt->execute();
$result = $stmt->get_result();
$otp = $result->fetch_all();

echo json_encode($otp);
?>   