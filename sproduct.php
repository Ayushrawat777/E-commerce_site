<?php
include 'connection.php';
session_start();

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lubov clothing/product</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "header.php";
    ?>

    <section id="prodetails" class="section-p1">

        <?php
        $sql = "SELECT * FROM products 
            WHERE id = $id;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="single-pro-image">
                    <img src="images/home-product/<?php echo $row['image'] ?>" width="100%" id="MainImg" alt="">
                </div>

                <div class="single-pro-details">
                    <h6>Home / T-shirt</h6>
                    <?php
                    if ($row['pro_qty']==0) {
                        echo '<h4 style="color:red ;">OUT OF STOCK</h4>';
                    }
                    else {
                        echo '<h4 style="color:blue ;">IN STOCK</h4>';
                        echo '<input type="number" value="1" min="1" max= "'.$row['pro_qty'].'">';
                    }
                    ?>
                    <h4><?php echo $row['name'] ?></h4>
                    <h2><?php echo $row['price'] ?></h2>
                    <select>
                        <option value="">Select Size</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                        <option value="">Small</option>
                        <option value="">Large</option>
                    </select>
                    
                    <form action="cart.php" method="post">
                            <input type="hidden" min="1" name="product_quantity" value="1">
                            <input type="hidden" name="product_image" value="<?php echo $row['image'] ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                            <input type="submit" value="add to cart" name="add_to_cart" class="normal">
                        </form>
                   
                    <h4>Product Details</h4>
                    <span>THE gildan ultra cotton t-shirt is made from a substantial 6.0 sq feet fabric contructed from 100%
                        real cotton.this classic fit preshrink jersey fit
                        provide unmatched comfort with each wear.gildan ultra cotton t-shirt is made from a substantial 6.0 sq feet fabric contructed from 100%
                        real cotton.this classic fit preshrink jersey fit
                        provide unmatched comfort with each wear.
                    </span>
                </div>

        <?php
            }
        } else {
            echo "count 0";
        }
        ?>



    </section>

    <!-- <section>
        <div class="small-img-group">
            <#?php
            $sql = "SELECT * FROM products 
            WHERE id between 1 and 4";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="small-img-col">
                        <img src="images/home-product/<#?php echo $row['image'] ?>" width="100%" class="small-img" alt="">
                    </div>


            <#?php
                }
            } else {
                echo "count 0";
            }
            ?>
        </div>
    </section>
        -->

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <?php
            $sql = "SELECT * FROM products
            WHERE id between 5 and 8";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_array($query)) {
            ?>
                    <div class="pro">
                        <img src="images/home-product/<?php echo $row['image'] ?>" alt="">
                        <div class="des">
                            <h5><?php echo $row['name'] ?></h5>
                            <div class="star">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h4><?php echo $row['price'] ?></h4>
                        </div>
                        <a href="#"><i class="bi bi-cart"></i></a>
                    </div>
            <?php
                }
            } else {
                echo "count 0";
            }
            ?>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offer</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>

    <script src="script.js"></script>
</body>

</html>