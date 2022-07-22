<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lubov clothing</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
 
        <div class="carousel-inner">
            <?php
            $sql = "SELECT * FROM slider";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="carousel-item active">
                        <img src="images/slider/<?php echo $row['image']?>" class="d-block w-100" style="height: 88vh;">
                    </div>
                <?php
                }
            }
                ?>
        </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    </div>

    <section id="features" class="section-p1">
        <div class="fe-box">
            <img src="images/features/free-shipping.jpg" alt="free-shipping" width="200px" height="100px">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/online-order.webp" alt="online-order" width="200px" height="100px">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/save-money.png" alt="save-money" width="200px" height="100px">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/promotion.jpg" alt="promotion" width="200px" height="100px">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/happy sale.jpg" alt="happy-sale" width="200px" height="100px">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/24-hour-support.png" alt="24-hour-support" width="200px" height="100px">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <?php
            $sql = "SELECT * FROM products
            WHERE id between 1 and 8";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="pro">

                        <a href="sproduct.php?id=<?php echo $row['id'] ?>"> <img src="images/home-product/<?php echo $row['image'] ?>" alt="logo"></a>
                        <div class="des">
                            <h5><?php echo $row['name'] ?></h5>
                            <div class="star">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h4>&#8377;<?php echo $row['price'] ?></h4>
                        </div>
                        <a href="sproduct.php?id=<?php echo $row['id'] ?>"><i class="bi bi-cart"></i></a>

                        <form action="cart.php" method="post">
                            <input type="hidden" min="1" name="product_quantity" value="1">
                            <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
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


    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All T-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <?php
            $sql = "SELECT * FROM products 
            WHERE id between 9 and 16 ;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="pro">

                        <a href="sproduct.php?id=<?php echo $row['id'] ?>"> <img src="images/home-product/<?php echo $row['image'] ?>" alt="logo"></a>
                        <div class="des">
                            <h5><?php echo $row['name'] ?></h5>
                            <div class="star">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h4>&#8377;<?php echo $row['price'] ?></h4>
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

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic cloth is on sale at male fashion </span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic cloth is on sale at male fashion </span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
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

    <script src="script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>