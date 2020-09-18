<?php
	require 'dbconnect.php';
	$querydb = mysqli_query($conn,"CREATE DATABASE android1");
	$querytable =mysqli_query($conn,"CREATE TABLE `android1`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
?>