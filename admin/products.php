


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
    <title>login</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
<center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>Online Store</h2>
            <img src="one.jpg.jpeg" alt="logo" width="250px" height="200px"><br>

            <input type="text" name="Name" placeholder="Name" required><br>
            <input type="text" name="price" placeholder="Price" required><br>
            <input type="text" name="Brand" placeholder="Brand" required><br>
            <input type="text" name="Des" placeholder="Description" required><br>
            <input type="text" name="Count" placeholder="Count" required><br>

          
            <label for="Categories"> Category</label>
            <select name="Categories" id="Categories" required>
                <option disabled selected></option>
                <?php while ($row = mysqli_fetch_assoc($categories_result)) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php } ?>
            </select>
            <br>

            <label for="file">Image</label>
            <input type="file" id="file" name="image" required><br>

            <button name="Add">Add</button><br><br>
            <a href="products_admin.php">Browse Products</a>
        </form>
    </div>
    <p>Developer ZR</p>
</center>
</body>
</html>
