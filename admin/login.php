<?php 

include('../config/constant.php ');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN FOOD ORDER SYSTEM</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{background: url('../image/bg.jpg');	}
</style>
<body>
    <div class="login">
        <h1 class="text-center">Log in</h1>
        <h1><i class="fa fa-sign-in"></i></h1>
        <br><br>


<?php 

if(isset($_SESSION['login']))
{
        echo $_SESSION['login'];
unset($_SESSION['login']);
}


if(isset($_SESSION['no-login-message']))
{
        echo $_SESSION['no-login-message'];
unset($_SESSION['no-login-message']);
}
?><br><br>


        <form action=""method="POST" > 
           <b> Username <i class="fa fa-user" aria-hidden="true"></i> : </b> <br><br>
            <input type="text" name ="username" placeholder="Enter your name" required><br><br>
           <b> Password <i class="fa fa-lock" aria-hidden="true"></i> : </b><br><br>
            <input type="password" name="password" placeholder="Enter your password" required></br><br><br>
            <input type="submit" name="submit" value="Login" class="btn-login">


        </form><br><br><hr><br>
        <p class="text-center">Created by : <a href="#">Gaurav kumar</a></p>

    </div>


</body>
</html>

<?php
if(isset($_POST['submit'])){

$username=mysqli_real_escape_string($conn,$_POST['username']);
$raw=md5($_POST['password']);
$password=mysqli_real_escape_string($conn,$raw);



$sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

$res=mysqli_query($conn,$sql);

$count=mysqli_num_rows($res);
if($count==1)
{
    $_SESSION['login']="<div class='success'>login successful </div>";
$_SESSION['user']=$username;



header("location:".SITEURL.'admin/index.php');
}
else{
    $_SESSION['login']="<div class='error'>username and password did not match </div>";
    header("location:".SITEURL.'admin/login.php');

}

}
?>