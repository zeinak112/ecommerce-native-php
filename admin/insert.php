<?php
include("func/connect.php");

// if (isset($_POST['Add'])) {
//     if (!isset($_POST['Categories'])) {
//         die(" Error ");
//     }

//     $NAME = $_POST['Name'];
//     $PRICE = $_POST['price'];
//     $BRAND = $_POST['Brand'];
//     $DES = $_POST['Des'];
//     $COUNT = $_POST['Count'];
//     $CATEGORIES = $_POST['Categories'];

    // $IMAGE = $_FILES['image'];
    // $image_location = $_FILES['image']['tmp_name'];
    // $image_name = $_FILES['image']['name'];
    // $image_up = "images/" . $image_name;



// $IMAGE = $_FILES['image'];
// $image_location = $_FILES['image']['tmp_name'];

// $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
// $image_name = time() . '_' . uniqid() . '.' . $image_ext;

// $image_up = "images/" . $image_name;

// move_uploaded_file($image_location, $image_up);











//     $insert = "INSERT INTO products (name, price, image, count, des, categories, brand)
//                VALUES ('$NAME', '$PRICE', '$image_up', '$COUNT', '$DES', '$CATEGORIES', '$BRAND')";

//     $result = mysqli_query($con, $insert);

    
//        header("Location: products.php");

       
    
// }








if (isset($_POST['Add'])) {
   

    $NAME = $_POST['Name'];
    $PRICE = $_POST['price'];
    $BRAND = $_POST['Brand'];
    $DES = $_POST['Des'];
    $COUNT = $_POST['Count'];
    $CATEGORIES = $_POST['Categories'];

    

     $image_location = $_FILES['image']['tmp_name'];
      $image_name=$_FILES['image']['name'];
     $image_up = "images/". $image_name;

   
    // حفظ البيانات في قاعدة البيانات
    $insert = "INSERT INTO products (name, price, image, count, des, categories, brand)
               VALUES ('$NAME', '$PRICE', '$image_up', '$COUNT', '$DES', '$CATEGORIES', '$BRAND')";

    $result = mysqli_query($con, $insert);

    if (move_uploaded_file($image_location,'images/'. $image_name)) {
      echo "<script>alert('tam raf3 almntg')</script>";
       
}else{

    echo "<script>alert('tam raf3 almntg')</script>";
}

  header("Location: products_admin.php");
   
}
?>


 
