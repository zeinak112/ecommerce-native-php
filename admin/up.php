<?php
include("func/connect.php");

if (isset($_POST['Update'])) {
    if (!isset($_POST['Categories'])) {
        die("Error");
    }
    $ID =$_POST['id'];
    $NAME = $_POST['Name'];
    $PRICE = $_POST['price'];
    $BRAND = $_POST['Brand'];
    $DES = $_POST['Des'];
    $COUNT = $_POST['Count'];
    $CATEGORIES = $_POST['Categories'];

    $old_image = $_POST['old_image'];

    if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "images/" . time() . "_" . $image_name;

      
        
        if (!move_uploaded_file($image_location, $image_up)) {
            die("Error");
        }
    } else {
        
        
        $image_up = $old_image;
    }
    
    $update="UPDATE products SET name=
    '$NAME',price='$PRICE',image=' $image_up',
    count='$COUNT',des='$DES',categories=
    '$CATEGORIES',brand='$BRAND' WHERE id=$ID";
    $result = mysqli_query($con, $update);

    
       header("Location: products_admin.php");

      
   
}
?>
