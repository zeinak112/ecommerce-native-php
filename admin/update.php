<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
    exit();
}
include("func/connect.php");
$categories_result = mysqli_query($con, "SELECT id, name FROM categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
<!-- take information from db -->

  <?php
   include("func/connect.php");
    $ID =$_GET['id'];
    $UP=mysqli_query($con,"SELECT * FROM products WHERE id=$ID");
    $data = mysqli_fetch_assoc($UP);
    


 ?>

<center>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>Update Products</h2>
            
            <input type="text" name="id" placeholder="id" required value='<?= $data['id']?>'><br>
            <input type="text" name="Name" placeholder="Name" required value='<?= $data['name']?>'><br>
            <input type="text" name="price" placeholder="Price" required value='<?= $data['price']?>'><br>
            <input type="text" name="Brand" placeholder="Brand" required value='<?= $data['brand']?>'><br>
            <input type="text" name="Des" placeholder="Description" required value='<?= $data['des']?>'><br>
            <input type="text" name="Count" placeholder="Count" required value='<?= $data['count']?>'><br>

            <label for="Categories">Category</label>
            <select name="Categories" id="Categories" required>
            <option disabled value=""></option>
            <?php while ($row = mysqli_fetch_assoc($categories_result)) { ?>
            <option value="<?= $row['id']; ?>" 
            <?= $row['id'] == $data['categories'] ? 'selected' : '' ?>>
            <?= $row['name']; ?>
            </option>
            <?php } ?>
             </select>

           <br><br>
           
            <label for="file">Image</label><br>
             <img src="<?= $data['image'] ?>" width="120" height="120" style="object-fit: cover; border-radius: 8px;"><br><br>

           
            <label for="file">Image</label>
             <input type="file" id="file" name="image"><br><br>

          
             <input type="hidden" name="old_image" value="<?= $data['image'] ?>">

           <br>
           
            <button name="Update" type="submit">Update</button><br><br>
            <a href="products_admin.php">Browse Products</a>
        </form>
    </div>
    
</center>
</body>
</html>
