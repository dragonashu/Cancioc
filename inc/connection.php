<?php

try {
	$db = new PDO("mysql:host=localhost;dbname=projects;port=3306","root","root");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}


