<?php

include_once("config.php");


$host='localost';
$user='root';
$password="";
$dbname="baza";



try{
 $conn = new PDO("mysql:host=localhost;dbname=$dbname", "root","");

 $sql="CREATE TABLE klienta (id int(30) not null AUTO_INCREMENT PRIMARY KEY,
name varchar(30) not null,
username varchar(30) not null,
surname varchar(30) not null,
password varchar(30) not null";


$sql= "INSERT INTO klienta (name , username ,surname, password) VALUES ('edlira kastrati' , 'edlirak8@gmail.com' , 'edlirakk', 18);";
$conn -> exec($sql);
echo "new row is inserted succesfully!";

}catch(Exception $error){
    echo "new row isnt inserted!" .$error->getMessage();
}


?>
<?php

include_once("config.php");
$sql="SELECT * FROM klienta";

$getUsers=$conn->prepare($sql);
$getUsers->execute();

$klienta=$getUsers->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title> klientele</title>
    <style>
        table,td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td, th {
            padding: 10px 20px;
        }
        </style>

</head>
<body>
    <table>
        <th> id </th> 
        <th> name </th> 
        <th> username </th> 
        <th> surname </th> 
        <th> password </th> 


        <tbody>

        <?php
        foreach($klienta as $klient){
            ?>
        <tr>
             <td><?= $klient['id'] ?> </td>
              <td><?= $klient['name'] ?> </td>
              <td><?= $klient['username'] ?> </td>
              <td><?= $klient['surname'] ?> </td>
              <td><?= $klient['password'] ?> </td>
              

<td>
            <button><a href="delete.php?id=<?= $klient['id'] ?> ">delete </a> </button>
            <button><a href="edit.php?id=<?= $klient['id'] ?> "> EDIT</a> </button>
 </td>
 </tr>
<?php 
        }
        ?>
</tbody>
</table>

<a href="form.html"> add user </a>




</body>
</html>