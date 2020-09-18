<?php

$servername = "localhost";
$database = "android";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(mysqli_connect_error())
{
    echo "Failed to Connect";
    exit();
}

// echo "connection successful";

// try {

// $pdo = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
// // $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
// // $pdo = new PDO($dsn, $username, $password);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // echo "Connection Okay";

// return $pdo;

// }

// catch (PDOException $e)

// {
// echo "Connection failed:" . $e->getMessage();
// }

?>