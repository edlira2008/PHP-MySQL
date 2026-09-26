<?php



$host='localhost';
$user='root';
$pass="";

try{
	$conn= new PDO("mysql:host=$host;port=3306",$user,$pass);

	$sql="CREATE DATABASE IF NOT EXISTS ora_fundit";
	$conn->exec($sql);

	echo "database is created";
}catch(Exception $error){
	echo "database not connected" .$error->getMessage();	
	}

?>