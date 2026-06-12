<?php

include("admin/func/connect.php");
$ID =$_GET['id'];
mysqli_query($con,"DELETE FROM addcard WHERE id=$ID");

header('location:care_area.php');
?>