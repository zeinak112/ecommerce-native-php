

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      background-color: #0d0f1e;
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    /* Header */
   .header {
  background: rgba(19, 35, 47, 0.9);
  padding: 15px 30px;
  position: relative;
  display: flex;
  align-items: center;
  height: 60px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
}

.menu-toggle {
  font-size: 28px;
  cursor: pointer;
  background: none;
  border: none;
  color: #1ab188;
  z-index: 2;
}

.header-title {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  font-size: 24px;
  font-weight: bold;
  color: rgb(253, 250, 255);
}


    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 60px;
      left: 0;
      width: 220px;
      height: 100%;
      background-color: rgba(19, 35, 47, 0.95);
      padding-top: 20px;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease;
    }

    .sidebar a {
      display: block;
      padding: 15px 20px;
      color: #1ab188;
      text-decoration: none;
      font-size: 18px;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: #1ab188;
      color: #fff;
    }

    .sidebar.hidden {
      transform: translateX(-100%);
    }

  
    .main-content {
      margin-left: 240px;
      padding: 20px;
    }
 
    @media (max-width: 768px) 
     

   .main-content.with-sidebar {
  margin-left: 240px;
  transition: margin-left 0.3s ease;
  }

      
   .main-content.full-width {
  margin-left: 0;
       }


    /* Cards */
    .card {
      background: rgba(19, 35, 47, 0.9);
      color: white;
      border: none;
      margin-bottom: 30px;
      box-shadow: 0 4px 10px rgba(19, 35, 47, 0.3);
    }

    .btn-primary {
      background: linear-gradient(90deg, rgb(34, 152, 156), #a64bf4);
      border: none;
    }

    .btn-primary:hover {
      background: #159f76;
    }

    .btn-danger {
      background-color: #a94442;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c9302c;
    }
    .product-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

  </style>
</head>
<body>

  <!-- Header -->
  <div class="header">
  <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
  <span class="header-title">Admin Dashboard</span>
</div>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    
    <a href="products.php">Add Products</a>
    <a href="index.php">logout</a>

  </div>

  

 <div class="main-content with-sidebar" id="main-content">
  <div class="container mt-4">

    <h3 class="mb-4 text-white">All products</h3>

    <div class="table-responsive">
      <table class="table table-dark table-bordered table-hover align-middle text-center">
        <thead class="table-primary text-dark">
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>price</th>
            <th>count</th>
            <th>des</th>
            <th>views</th>
            <th>brand</th>
            <th>categories</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
include("func/connect.php");
include("insert.php");



$query = "
  SELECT products.*, categories.name AS category_name
  FROM products
  LEFT JOIN categories ON products.categories = categories.id
";

$result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr>
    <td><img src='" . $row['image'] . "' width='80' height='80' style='object-fit: cover; border-radius: 8px;'></td>

       <td>{$row['name']}</td>
      <td>{$row['name']}</td>
      <td>{$row['price']}</td>
      <td>{$row['count']}</td>
      <td>{$row['des']}</td>
      <td>{$row['views']}</td>
      <td>{$row['brand']}</td>
      <td>{$row['category_name']}</td>
      <td>


        <a href='delete.php?id=$row[id]' class='btn btn-sm btn-danger'>Delete</a>
        <a href='update.php?id=$row[id]' class='btn btn-sm btn-primary'>Update</a>
     
        </td>
    </tr>
  ";
}
?>

           </tbody>
      </table>
    </div>

  </div>
</div>


  <!-- Sidebar Toggle Script -->
  <script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const main = document.getElementById('main-content');

    sidebar.classList.toggle('hidden');
    sidebar.classList.toggle('show');
    main.classList.toggle('full-width');
  }
</script>


</body>
</html>
