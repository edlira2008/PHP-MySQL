

<?php

include_once("config.php");
$sql="SELECT * FROM makina";

$getMakina=$conn->prepare($sql);
$getMakina->execute();

$makina=$getMakina->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, td, th{
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
<thead>
    <th> ID</th>
<th> car </th>
<th> engine </th>
<th> year </th>
<th> PS </th>
<th> Action </th>

</thead>
<tbody>
    <?php
    foreach($makina as $makin){
        ?>
    <tr>
        <td><?= $makin['id'] ?></td>
        <td><?= $makin['car'] ?></td>
        <td><?= $makin['engine'] ?></td>
        <td><?= $makin['year'] ?></td>
        <td><?= $makin['PS'] ?></td>
     <td> 
            <button> <a href="delete.php?id=<?php echo $makin['id'] ?>"> delete </a> </button>
            <button> <a href="edit.php?id=<?php echo $makin['id'] ?>"> edit </a> </button>
</td>

</tr>
<?php
    }
    ?>


    
</tbody>
    </table>
    <a href="../../PHP-MySQL/modul9/form.html"> add user </a>
</body>
</html>


