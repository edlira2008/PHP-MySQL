



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
    <form action="register.php" method="POST">
<h1 class="h3 mb-3 fw-normal"> register </h1>

<div class="form-floating">
    <input type="text" class="form-control" placeholder="emri" name="emri" id="emri">
    <label for="emri"></label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" placeholder="username" name="username" id="username">
    <label for="username"></label>
</div>
<div class="form-floating">
    <input type="email" class="form-control" placeholder="email" name="email" id="email">
    <label for="email"></label>
</div>
<div class="form-floating">
    <input type="password" class="form-control" placeholder="passsword" name="password" id="password">
    <label for="password"></label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" placeholder="roli" name="roli" id="roli">
    <label for="roli"></label>
</div>

<div class="checkbox mb-3" >
    <label>
        <input type="checkbox" value="remember-me"> remember me
    </label>
</div>

<button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" > sign up </button>
<span> already have an account? </span><a href="login.php"></a>
</form>
</main>



</body>
</html>