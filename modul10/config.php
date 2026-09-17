<?php

 $host='localhost';
 $db_name='testdb';
 $user= 'root';
 $password="";

// si ur lidhse mes dy komponentave - API , psh si klienti me server 

// e njejt si PDO DMTH API 
// API DMTH EDH T BOOTSTRAP
try{
    $conn =new  PDO("mysql:host=$host;dbname=$db_name", 'root', "");
    // echo "connected successfully!";

}  catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}

?>