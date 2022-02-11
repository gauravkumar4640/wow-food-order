<?php 

include('../config/constant.php ');
include('login-check.php ');



?>

<?php include 'sqlconnection.php';?>
<html>
    <head>
        <title>food-order website</title> 
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <div class="menu text-center">
        <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="manage_admin.php">Admin</a></li>
            <li><a href="manage_category.php">Category</a></li>
            <li><a href="manage_food.php">Food</a></li>
            <li><a href="manage_order.php">Order</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        </div>    
       

        </div> 