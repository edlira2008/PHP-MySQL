<?php

// bootstrap sherben per zvillimin e webave dmth e ka kodin e html edhe cs
//  getbootstrap.com osht per me marr kod t gatshem


include_once("header.php");

?>



<div class="login">
<form class="form-signin" action="loginLogic.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal"> please sign in </h1>

<label for="inputEmail" class="sr-only"> username </label>
<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus > 



<label for="inputPassword " class="sr-only"> password </label>
<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"  > 

<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" > Sign in</button>

<small> Don't have account? <a href="signup.php"> sign up </a> </small>
<p> digital school &copy; 2026 </p>
<p class="mt-5 m-3 text-muted"> digital school &copy; 2026 </P>

</form>


</div>


<?php

// bootstrap sherben per xhirmin e webave dmth e ka kodin e html edhe cs
//  getbootstrap.com osht per me marr kod t gatshem
include_once("footer.php");
?>