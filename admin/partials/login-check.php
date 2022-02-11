
<?php 

//check whether the user is logged in or not

if(!isset($_SESSION['user'])) //ifuser is not set user is not logged in 
{
 
    $_SESSION['no-login-message']="<div class='error'>Please Log in to access the Admin Panel</div>";
//redirect to login page
header("location:".SITEURL.'admin/login.php');
}

?>