<?php

include_once("config.php");
$sql="SELECT * FROM users";

$getUsers=$conn->prepare($sql);
$getUsers->execute();

$users=$getUsers->fetchAll();


?>

<html>
    <head>
        <title>all users </title>
  <style>
  table,td,th{
    border: 1px solid black;
    border-collapse: collapse;
  }
  td,th{
    padding: 10px 20px;

  }
  </style>
    </head>

    <body> 
        <table>
            <thead> 
            <th> id</th>
            <th> usernamee </th>
            <th> password </th>
            <th> age </th>
            <th> action </th>

            </thead>


            <tbody>
<?php
foreach($users as $person){
    ?>
    <tr>
        <td><?= $person['id'] ?> </td>
        <td><?= $person['USERNAME'] ?> </td>
        <td><?= $person['password'] ?> </td>
        <td><?= $person['age'] ?> </td>
        <td><button><a href="delete.php?id=<?= $person['id'] ?> ">delete </a> </button></td>

        
    </tr>
    <?php
}
?>



            </tbody>
        </table>

<a href="/modul9/form.HTML"> add user </a>
    </body>
</html>