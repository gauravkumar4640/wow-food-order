<?php 
include('partials/menu.php');
?>


<div class="main-content">

<div class="wrapper">
    <h1>Change password</h1><br><br>


<?php 

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
?>


    <form action="" method="POST">
        <table class="tbl-30">
<tr>
    <td>Current password : </td>
    <td><input type="password" name="current_password" placeholder="current password"></td>
</tr>
<tr>
    <td>New password : </td>
    <td><input type="password" name="new_password" placeholder="new password"></td>
</tr>

<tr>
    <td>Confirm password : </td>
    <td><input type="password" name="confirm_password" placeholder="confirm password" ></td>
</tr>

<tr>
    <td colspan="2">
        <input type="hidden" name="id" value="<?php echo$id;?>">
        <input type="submit" name="submit" value="Change password" class="btn-secondary">

    </td>
</tr>

        </table>


    </form>
</div>
</div>

<?php


if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $current_passowrd=md5($_POST['current_password']);
    $new_password=md5($_POST['new_password']);
    $confirm_password=md5($_POST['confirm_password']);



    $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$current_passowrd'";

    $res=mysqli_query($conn,$sql);

    if($res==true){
$count=mysqli_num_rows($res);
if($count==1){


if($new_password==$confirm_password){



    $sql="UPDATE tbl_admin SET
    password='$new_password'
    WHERE id=$id";

    $res=mysqli_query($conn,$sql);
    
if($res==true){


    $_SESSION['changepassword']="<div class='success'>password changed successfully </div>";
    header("location:".SITEURL.'admin/manage_admin.php');
}
else{

    $_SESSION['changepassword']="<div class='error'>failed to change password </div>";
    header("location:".SITEURL.'admin/manage_admin.php');

}


}
else{
    $_SESSION['passwordnotmatch']="<div class='error'>password did not match </div>";
    header("location:".SITEURL.'admin/manage_admin.php');

}
}
else{

    $_SESSION['usernotfound']="<div class='error'>user not found </div>";
    header("location:".SITEURL.'admin/manage_admin.php');
}
    }
   
}

?>

<?php 
include('partials/footer.php');
?>