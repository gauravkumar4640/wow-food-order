<?php


include('../config/constant.php ');


//destroy the session
session_destroy();
header("location:".SITEURL.'admin/login.php');


?>