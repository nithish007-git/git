<?
$username=$_POST['email_addres'];
$password=$_POST['password'];
 $result=validate_cred($username,$password);
 if ($result){
   ?>
    <h1 style="padding: 50px;"> LOGIN SUCCESS</h1>
<?
 }else{
     ?>
<main class="form-signin">
  <form method="post" action="signup.php">
    <img class="mb-4" src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-19/252231131_226934012865209_6591799354030639444_n.jpg?stp=dst-jpg_s320x320&_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=105&_nc_ohc=9TMzMU1NnsQAX9gMemv&tn=Abgw6weIM54up7TL&edm=ABfd0MgBAAAA&ccb=7-4&oh=00_AT_6L4qcnNP8o6TA-VNdBMGT-jUD0kAEGs3T4p3_Pnx_Jg&oe=6274E556&_nc_sid=7bff83" style="border-radius:50%;" alt="" width="72" height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input   name ="email_addres" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input   name ="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</main>
 

<?php
 }

?>

