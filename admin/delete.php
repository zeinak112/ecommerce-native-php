<?php

include("func/connect.php");
$ID =$_GET['id'];
mysqli_query($con,"DELETE FROM products WHERE id=$ID");

header('location:products_admin.php');
?>