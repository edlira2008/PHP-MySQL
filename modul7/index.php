<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>

<?php
$host='localhost';
$user='root';
$pass="";

try{
$conn=new PDO("mysql:host'=$host",$user,$pass);
$sql="CREATE DATABASE ora_fundit";
$conn->exec($sql);

echo "database is created";



}catch(Exception $error){
	echo "noy connected".$error->getMessage();
}


?>