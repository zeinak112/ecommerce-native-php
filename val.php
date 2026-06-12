<?php
include("admin/func/connect.php");
include("admin/insert.php");



$ID = intval($_GET['id']);
$UP = mysqli_query($con, "SELECT * FROM products WHERE id=$ID");

$data = mysqli_fetch_array($UP);
if (!$data) {
    echo "<div style='color: red; text-align: center;'>⚠️ المنتج غير موجود أو تم حذفه</div>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   body {
      background-color: #f9f7f3; /* بيج فاتح */
      color: #333; /* رمادي غامق */
      font-family: "Segoe UI", sans-serif;
      padding: 40px 10px;
    }

    .main {
      background-color: #ffffff; /* أبيض صافي */
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.08); /* ظل خفيف جدًا */
      padding: 30px;
      width: 100%;
      max-width: 400px;
    }

    .product-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
    }

    .btn-custom {
      background: linear-gradient(90deg, #f5d6ba, #d6a87c); /* بيج وردي ناعم */
      border: none;
      color: #333;
      font-weight: 500;
    }

    .btn-custom:hover {
      background-color: #f3c59e;
      color: #000;
    }

    a {
      color: #a67c52; /* بني فاتح */
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
    }

    a:hover {
      text-decoration: underline;
    }

    input[type="text"] {
      display: none;
    }
  
  </style>
</head>
<body>

  <center>
    <div class="main">
      <form action="insert_card.php" method="post">

        
        <img src="<?php echo 'admin/' . $data['image']; ?>" alt="صورة المنتج" class="product-img">



       
        <h4><?= $data['name'] ?></h4>
        <p><strong>price:</strong> <?= $data['price'] ?> EG</p>

       
        <input type="text" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="name" value="<?= $data['name'] ?>">
        <input type="text" name="price" value="<?= $data['price'] ?>">
        <input type="text" name="image" value="<?= $data['image'] ?>">

       
        <button name="Add" type="submit" class="btn btn-custom w-100">Order Confirmation</button>

        <a href="shop.php">⬅ Home</a>
      </form>
    </div>
  </center>

</body>
</html>
