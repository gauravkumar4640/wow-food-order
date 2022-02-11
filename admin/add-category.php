<?php 
include('partials/menu.php');
?>


<div class="main-content">

<div class="wrapper">

<h1>Add Category</h1><br><br>


<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']); 
}


if(isset($_SESSION['upload'])){
    echo $_SESSION['upload'];
    unset($_SESSION['upload']); 
}
?>

<br><br>
<form action="" method="POST" enctype="multipart/form-data">

<div class="">

<table class="tbl-30">
    <tr>
        <td>Title : </td>
        <td>
            <input type="text" name="title" placeholder="Category name" required>
        </td>
    </tr>


    <tr>
        <td>Select Image : </td>
        <td><input type="file" name="image"></td>
    </tr>
    <tr>
        <td>Featured : </td>
        <td>
            <input type="radio" name="featured" value="yes">Yes
            <input type="radio" name="featured" value="no">No
            
        </td>
    </tr>
    <tr>
        <td>Active : </td>
        <td>
            <input type="radio" name="active" value="yes">Yes
            <input type="radio" name="active" value="no">No
            
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Category" class="btn-secondary"> </td>
    </tr>
</table>
</div>





</form>


<?php 

if(isset($_POST['submit']))
{
    //echo "clicked";
    $title=$_POST['title'];
   // $username=$_POST['username'];
    //$password=md5($_POST['password']);
    if(isset($_POST['featured'])){
        $featured=$_POST['featured'];

    }
    else{
        $featured="no";
       

    }
    if(isset($_POST['active'])){
        $active=$_POST['active'];

    }
    else{
        $active="no";
       

    }
    if(isset($_FILES['image']['name'])){
        $image_name=$_FILES['image']['name'];

if($image_name!="")
{



//image name changing
 $ext=end(explode('.',$image_name));

 $image_name="Food_Category_".rand(000,999).'.'.$ext;

        $source_path=$_FILES['image']['tmp_name'];
        $destination_path='../images/category/'.$image_name;

        $upload=move_uploaded_file($source_path,$destination_path);


        if($upload==false){
            $_SESSION['upload']="<div class='error'>failed to upload image</div>";
            header("location:".SITEURL.'admin/add-category.php');
            die();

        }
    }
    }
    else{
       $image_name='';
    }
//print_r($_FILES['image']);
//die();


$sql="INSERT INTO tbl_category SET
title='$title',
image_name='$image_name',
featured='$featured',
active='$active'
";
$res=mysqli_query($conn,$sql);
if($res==true){
    //echo"inserted";
    $_SESSION['add']="<div class='success'>Category added successfully</div>";
    header("location:".SITEURL.'admin/manage_category.php');
    }
    else
    {
    // echo"failed ";
    $_SESSION['add']="<div class='error'>failed to add category </div>";
    header("location:".SITEURL.'admin/add-category.php');
    }
    }
    
    
    ?>


</div>
</div>

<?php 
include('partials/footer.php');
?>