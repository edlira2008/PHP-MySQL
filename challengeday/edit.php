<?php

 include_once("config.php");


 $id = $_GET['id'];

  $sql="SELECT * FROM makina WHERE id=:id";
  $prep=$conn->prepare($sql);
  $prep->bindParam(":id",$id);
  $prep->execute();


  $makina=$prep->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page <?php  echo $makina['id'] ?></title>
</head>
<body>
     <form action="update.php" method="post">

       <input type="hidden"  name="id" value="<?php echo $makina['id']?>"><br>
        <input type="text" name="car" placeholder="Username" value="<?php echo $makina['car']?>"><br>
        <input type="text" name="engine" placeholder="engine" value="<?php echo $makina['engine']?>"><br>
        <input type="number" name="year" placeholder="year" value="<?php echo $makina['year']?>"><br>
        <input type="number" name="PS" placeholder="PS" value="<?php echo $makina['PS']?>"><br>

        
        <button type="submit" name="submit" placeholder="submit"> Add </button>


</form>
</body>
</html>