<?php

	$dsn = 'mysql:host=shop.c70ak2uu6s1b.us-east-1.rds.amazonaws.com:3306;dbname=shop';
	$user = 'admin';
	$pass = 'aditya956';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}