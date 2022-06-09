<?php
$signup=false;
if(isset($_POST['username'])and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email_address'];
    $phone=$_POST['phone'];
    $signup=true;
    $result=signup( $username,$phone,$email,$password);



}
?>
<?

if ($signup) {
    if ($result) {
        ?>
<h1 style="padding: 50px;"> LOGIN SUCCESS</h1>
<?php
    }
     else {
        ?>
    <h1 style="padding: 50px;"> LOGIN FAILED</h1>
<?
    }
}
else{
    ?>



<main class="form-signup">
        <form method="post" action="signup.php">
            <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png" alt="" height="50">
            <h1 class="h3 mb-3 fw-normal">Signup here</h1>
            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
                <label for="floatingInputUsername">Username</label>
            </div>
            <div class="form-floating">
                <input name="password" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
                <label for="floatingInputUsername">Phone</label>
            </div>
            <div class="form-floating">
                <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="phone" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign up</button>
        </form>
    </main>
<?php
}
?>