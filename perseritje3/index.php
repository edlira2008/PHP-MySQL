<?php 
include_once("config.php");

$host='localhost';
$user='root';
$password="";
$dbname="lili";

try
{
    $conn= new PDO("mysql:host=localhost;dbname=$dbname", 'root', "");

$sql= "CREATE TABLE info ( id int(6) PRIMARY KEY AUTO_INCREMENT, 
name varchar (30) not null,
username varchar (30) not null,
surname varchar (30) not null,
email varchar (30) not null 
)";

$sql= "INSERT INTO info (name,username, surname, email) VALUES ( 'lili' , 'lirak2' , 'hasani' , 'lirak8@gmail.com');"; 
$conn ->exec($sql);
echo "new row inserted";
}catch(Exception $error) {
    echo "new row isnt inserted" .$error->getMessage();
    
}


?>
<?php
include_once("config.php");

$sql= "SELECT * FROM info";

$getInfo=$conn->prepare($sql);
$getInfo->execute();
$info=$getInfo -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th> name </th>
        <th> username </th>
        <th> surname </th>
        <th> email </th>

        <tbody> 
            
    <?php
     foreach($info as $in){
     ?>
        <tr> 
            <td><?= $in ['id'] ?> </td>
            <td><?= $in ['username'] ?> </td>
            <td><?= $in ['surname'] ?> </td>
            <td><?= $in ['email'] ?> </td>

            <td>
                <button> <a href="delete.php?id=<?= $in ['id'];?> "> delete </a> </button>
                <button> <a href="edit.php?id=<?= $in ['id'];?> "> edit</a> </button>

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

