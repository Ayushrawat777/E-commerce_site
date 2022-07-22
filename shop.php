<?php
include "connection.php";
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
    <title>lubov clothing</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "header.php";
    ?>

    <section id="page-header">
        <h2>#Stayhome</h2>
        <p>Save more with coupons &up to 70% off</p>
    </section>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $sql = "SELECT * FROM products";
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
                           
                            <a href="sproduct.php?id=<?php echo $row['id'] ?>"><i class="bi bi-cart"></i></a>
                             <form action="cart.php" method="post">
                            <input type="hidden" min="1" name="product_quantity" value="1">
                            <input type="hidden" name="product_image" value="<?php echo $row['image'] ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                        </form>
                    </div>


            <?php
                }
            } else {
                echo "count 0";
            }
            ?>
        </div>
    </section>
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="bi bi-arrow-right"></i></a>
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

    <script src="script.js"></script>
</body>

</html>