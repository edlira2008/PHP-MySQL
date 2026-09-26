<?php

 include_once("config.php");


//  $id = $_GET['id'];


  $sql="SELECT * FROM klienta WHERE id=:id";
  $prep=$conn->prepare($sql);
  $prep->bindParam(":id",$id);
 


  $klient=$prep->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page <?php  echo $klient['id'] ?></title>
</head>
<body>
     <form action="update.php" method="post">

        <input type="hidden"  name="id" value="<?php echo $klient['id']?>"><br></br>
        <input type="text" name="username" placeholder="Username" value="<?php echo $klient['username']?>"><br></br>
        <input type="text" name="surname" placeholder="Username" value="<?php echo $klient['surname']?>"><br></br>
        <input type="password" name="password" placeholder="Password" value="<?php echo $klient['password']?>"><br></br>
        <button type="submit" name="submit" placeholder="submit">Add </button>


</form>
</body>
</html>