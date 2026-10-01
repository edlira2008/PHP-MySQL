



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<main class="form-signin">
    <form action="loginLogic.php">
<h1 class="h3 mb-3 fw-normal"> please sign in </h1>


<div class="form-floating">
    <input type="text" class="form-control" placeholder="username" name="username" id="username">
    <label for="username"></label>

</div>

<div class="form-floating">
    <input type="password" class="form-control" placeholder="password" name="password" id="password">
    <label for="password"></label>
</div>

<div class="checkbox mb-3">
    
    <label type="checkbox" value="remember-me">remember me </label>
</div>

<button class="w-100 btn btn-lg btn-primary" type="submit" name="submit"> sign in </button>
<span> dont have an account? </span><a href="index.php"></a>



    </form>
</main>



</body>
</html>