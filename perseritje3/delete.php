<?php
include_once("config.php");

$id = $_GET["id"];

$sql="DELETE FROM info WHERE id=:id";
$deleteInfo= $conn->prep($sql);

$deleteInfo-> execute();


?>



