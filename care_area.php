<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>Your cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

 <style>
    body {
      background-color: #fdfaf5; 
      color: #5a4635; 
      font-family: 'Segoe UI', sans-serif;
      padding: 40px 10px;
    }

    h3 {
      color: #8c5e3c;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .cart-table {
      background: #ffffff; 
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      padding: 25px;
      max-width: 900px;
      margin: auto;
    }

    .cart-table table {
      width: 100%;
    }

    .cart-table th {
      background-color: #f3e6d5;
      color: #5a4635;
    }

    .cart-table td, .cart-table th {
      text-align: center;
      padding: 12px;
      vertical-align: middle;
    }

    .product-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 10px;
      border: 1px solid #ddd;
    }

    .btn-custom {
      background: linear-gradient(90deg, #f3d3b5, #e8bfae); /* بيج وردي ناعم */
      border: none;
      color: #5a4635;
      font-weight: 500;
      padding: 8px 14px;
    }

    .btn-custom:hover {
      background-color: #f1cbb0;
      color: #3d2f22;
    }

    .back-link {
      margin-top: 30px;
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
      background-color: #f9f4ec;
    }
  </style>
</head>
<body>

  <div class="text-center">
    <h3>🛒 Your cart</h3>
  </div>

  <div class="cart-table">
    <table class="table table-dark table-hover table-bordered">
      <thead>
        <tr>
          
            <th>Name</th>
            <th>price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("admin/func/connect.php");
        include("admin/insert.php");


        $result = mysqli_query($con, "SELECT * FROM addcard");
        while ($row = mysqli_fetch_array($result)) {
          echo"
            <tr>
                
              

              <td>{$row['name']}</td>
              <td>{$row['price']} EG</td>
              <td>
                <a href='del_card.php?id={$row['id']}' class='btn btn-sm btn-custom'>
                  <i class='bi bi-trash'></i> Delete
                </a>
              </td>
            </tr>
        ";
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="text-center back-link">
    
  <a href="checkout.php" class="btn btn-sm btn-custom">
      <i class=""></i> Checkout
    </a>
    
    <a href="shop.php" class="btn btn-sm btn-custom">
      <i class="bi bi-arrow-left-circle"></i> Home
    </a>
  </div>
 
  


</body>
</html>
