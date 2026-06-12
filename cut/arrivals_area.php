<!-- ##### New Arrivals Area Start ##### -->
    <!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">
                    <?php
                    $select = "SELECT * FROM products ORDER BY price DESC  LIMIT 5";
                    $result = $con->query($select);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                  
                  <a href="single-product-details.php?id=<?=$row['id']?>">
                  <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            
                              
        <img src="<?php echo 'admin/' . $row['image']; ?>" alt=""style="width:250px;height:250px" >

                            
                            <div class="product-favourite">
                                <a href="fav.php" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span><?= $row['name'] ?></span>
                            <a href="single-product-details.php">
                                <h6><?= $row['des'] ?></h6>
                            </a>
                            <p class="product-price"><?= $row['price'] ?></p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="val.php?id=<?=$row['id']?>" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                   
                   
                   <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ##### New Arrivals Area End ##### -->
