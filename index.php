<?php
	$servername = "localhost";
	$database = "";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername,$username,$password,$database);
	$querydb = mysqli_query($conn,"CREATE DATABASE android");
	$querytable =mysqli_query($conn,"CREATE TABLE `android`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
?>
